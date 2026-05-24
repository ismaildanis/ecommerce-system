<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthValidation\LoginRequest;
use App\Http\Requests\AuthValidation\RegisterRequest;
use App\Http\Requests\AuthValidation\UpdateProfileRequest;
use App\Services\Auth\ProfileService;
use App\Services\Auth\SellerLoginService;
use App\Services\Auth\UserLoginService;
use App\Services\Auth\UserRegistrationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(
        private readonly UserRegistrationService $userRegistrationService,
        private readonly UserLoginService $userLoginService,
        private readonly SellerLoginService $sellerLoginService,
        private readonly ProfileService $profileService,
    ) {}

    public function register(RegisterRequest $request): JsonResponse
    {
        $data = $this->userRegistrationService->registerUser($request->validated());

        return $this->json('Kullanıcı başarıyla kaydedildi', $data, 201)
            ->withCookie($this->makeAuthCookie('user_token', $data['token']));
    }

    public function login(LoginRequest $request): JsonResponse
    {
        $data = $this->userLoginService->login($request->validated());

        return $this->json('Giriş Başarılı', $data)
            ->withCookie($this->makeAuthCookie('user_token', $data['token']));
    }

    public function me(): JsonResponse
    {
        return $this->json('Kullanıcı Bilgileri', auth('user')->user());
    }

    public function updateProfile(UpdateProfileRequest $request): JsonResponse
    {
        $user = $this->profileService->updateUserProfile(
            auth('user')->user(),
            $request->validated()
        );

        return $this->json('Profil başarıyla güncellendi', $user);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user('user')?->currentAccessToken()?->delete();

        return $this->json('Çıkış Yapıldı.')
            ->withCookie($this->forgetAuthCookie('user_token'));
    }

    public function sellerLogin(LoginRequest $request): JsonResponse
    {
        $data = $this->sellerLoginService->login($request->validated());

        return $this->json('Giriş Başarılı', $data)
            ->withCookie($this->makeAuthCookie('seller_token', $data['token']));
    }

    public function sellerLogout(Request $request): JsonResponse
    {
        $request->user('seller')?->currentAccessToken()?->delete();

        return $this->json('Çıkış Yapıldı.')
            ->withCookie($this->forgetAuthCookie('seller_token'));
    }

    public function mySeller(): JsonResponse
    {
        return $this->json('Satıcı Bilgileri', auth('seller')->user());
    }

    private function makeAuthCookie(string $name, string $token)
    {
        return cookie(
            $name,
            $token,
            config('session.lifetime'),
            '/',
            null,
            (bool) env('SESSION_SECURE_COOKIE', false),
            true,
            false,
            env('SESSION_SAME_SITE', 'lax')
        );
    }

    private function forgetAuthCookie(string $name)
    {
        return cookie()->forget($name);
    }
}
