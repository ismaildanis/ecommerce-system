<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Omnia API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.10.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.10.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                                <a href="#endpoints-POSTapi-register">POST api/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                                <a href="#endpoints-POSTapi-login">POST api/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-forgot-password">
                                <a href="#endpoints-POSTapi-forgot-password">POST api/forgot-password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-reset-password">
                                <a href="#endpoints-POSTapi-reset-password">POST api/reset-password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-seller-login">
                                <a href="#endpoints-POSTapi-seller-login">POST api/seller/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-main">
                                <a href="#endpoints-GETapi-main">GET api/main</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-variant--variant_slug-">
                                <a href="#endpoints-GETapi-variant--variant_slug-">GET api/variant/{variant_slug}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-category--category_slug-">
                                <a href="#endpoints-GETapi-category--category_slug-">GET api/category/{category_slug}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-search">
                                <a href="#endpoints-GETapi-search">GET api/search</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-filter">
                                <a href="#endpoints-GETapi-filter">GET api/filter</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-iyzico-callback">
                                <a href="#endpoints-POSTapi-iyzico-callback">POST api/iyzico-callback</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-checkout-confirm">
                                <a href="#endpoints-POSTapi-checkout-confirm">POST api/checkout/confirm</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-bags-campaign">
                                <a href="#endpoints-POSTapi-bags-campaign">POST api/bags/campaign</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-bags-campaign">
                                <a href="#endpoints-DELETEapi-bags-campaign">DELETE api/bags/campaign</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-bags">
                                <a href="#endpoints-GETapi-bags">GET api/bags</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-bags">
                                <a href="#endpoints-POSTapi-bags">POST api/bags</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-bags--id-">
                                <a href="#endpoints-GETapi-bags--id-">GET api/bags/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-bags--id-">
                                <a href="#endpoints-PUTapi-bags--id-">PUT api/bags/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-bags--id-">
                                <a href="#endpoints-DELETEapi-bags--id-">DELETE api/bags/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-checkout-session--session_id-">
                                <a href="#endpoints-GETapi-checkout-session--session_id-">GET api/checkout/session/{session_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-checkout-session">
                                <a href="#endpoints-POSTapi-checkout-session">POST api/checkout/session</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-checkout-shipping">
                                <a href="#endpoints-POSTapi-checkout-shipping">POST api/checkout/shipping</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-checkout-payment-intent">
                                <a href="#endpoints-POSTapi-checkout-payment-intent">POST api/checkout/payment-intent</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-orders">
                                <a href="#endpoints-GETapi-orders">GET api/orders</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-orders--order-">
                                <a href="#endpoints-GETapi-orders--order-">GET api/orders/{order}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-me">
                                <a href="#endpoints-GETapi-me">GET api/me</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-account-addresses">
                                <a href="#endpoints-GETapi-account-addresses">GET api/account/addresses</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-account-addresses">
                                <a href="#endpoints-POSTapi-account-addresses">POST api/account/addresses</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-account-addresses--id-">
                                <a href="#endpoints-GETapi-account-addresses--id-">GET api/account/addresses/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-account-addresses--id-">
                                <a href="#endpoints-PUTapi-account-addresses--id-">PUT api/account/addresses/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-account-addresses--id-">
                                <a href="#endpoints-DELETEapi-account-addresses--id-">DELETE api/account/addresses/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-account-profile">
                                <a href="#endpoints-PUTapi-account-profile">PUT api/account/profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-logout">
                                <a href="#endpoints-POSTapi-logout">POST api/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-seller-logout">
                                <a href="#endpoints-POSTapi-seller-logout">POST api/seller-logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-my-seller">
                                <a href="#endpoints-GETapi-my-seller">GET api/my-seller</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-seller-campaign">
                                <a href="#endpoints-GETapi-seller-campaign">GET api/seller/campaign</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-seller-campaign">
                                <a href="#endpoints-POSTapi-seller-campaign">POST api/seller/campaign</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-seller-campaign--id-">
                                <a href="#endpoints-GETapi-seller-campaign--id-">GET api/seller/campaign/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-seller-campaign--id-">
                                <a href="#endpoints-PUTapi-seller-campaign--id-">PUT api/seller/campaign/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-seller-campaign--id-">
                                <a href="#endpoints-DELETEapi-seller-campaign--id-">DELETE api/seller/campaign/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-seller-product">
                                <a href="#endpoints-GETapi-seller-product">GET api/seller/product</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-seller-product">
                                <a href="#endpoints-POSTapi-seller-product">POST api/seller/product</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-seller-product--product_slug-">
                                <a href="#endpoints-GETapi-seller-product--product_slug-">GET api/seller/product/{product_slug}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-seller-product--id-">
                                <a href="#endpoints-PUTapi-seller-product--id-">PUT api/seller/product/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-seller-product--id-">
                                <a href="#endpoints-DELETEapi-seller-product--id-">DELETE api/seller/product/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-seller-product--product--variants">
                                <a href="#endpoints-GETapi-seller-product--product--variants">GET api/seller/product/{product}/variants</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-seller-product--product--variants">
                                <a href="#endpoints-POSTapi-seller-product--product--variants">POST api/seller/product/{product}/variants</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-seller-product--product--variants--variant-">
                                <a href="#endpoints-GETapi-seller-product--product--variants--variant-">GET api/seller/product/{product}/variants/{variant}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-seller-product--product--variants--variant-">
                                <a href="#endpoints-PUTapi-seller-product--product--variants--variant-">PUT api/seller/product/{product}/variants/{variant}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-seller-product--product--variants--variant-">
                                <a href="#endpoints-DELETEapi-seller-product--product--variants--variant-">DELETE api/seller/product/{product}/variants/{variant}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-seller-product--product_id--variants--variant_id--sizes">
                                <a href="#endpoints-POSTapi-seller-product--product_id--variants--variant_id--sizes">POST api/seller/product/{product_id}/variants/{variant_id}/sizes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-">
                                <a href="#endpoints-PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-">PUT api/seller/product/{product_id}/variants/{variant_id}/sizes/{size_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-">
                                <a href="#endpoints-DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-">DELETE api/seller/product/{product_id}/variants/{variant_id}/sizes/{size_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-seller-product--product_id--variants--variant--images">
                                <a href="#endpoints-POSTapi-seller-product--product_id--variants--variant--images">POST api/seller/product/{product_id}/variants/{variant}/images</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-seller-product--product_id--variants--variant--images--image-">
                                <a href="#endpoints-DELETEapi-seller-product--product_id--variants--variant--images--image-">DELETE api/seller/product/{product_id}/variants/{variant}/images/{image}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-seller-product--product_id--variants--variant--images-reorder">
                                <a href="#endpoints-PUTapi-seller-product--product_id--variants--variant--images-reorder">PUT api/seller/product/{product_id}/variants/{variant}/images/reorder</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-seller-categories--id--children">
                                <a href="#endpoints-GETapi-seller-categories--id--children">GET api/seller/categories/{id}/children</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-seller-order">
                                <a href="#endpoints-GETapi-seller-order">GET api/seller/order</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-seller-order--id-">
                                <a href="#endpoints-GETapi-seller-order--id-">GET api/seller/order/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-seller-orderitem--id--confirm">
                                <a href="#endpoints-POSTapi-seller-orderitem--id--confirm">POST api/seller/orderitem/{id}/confirm</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-seller-orderitem--id--refund">
                                <a href="#endpoints-POSTapi-seller-orderitem--id--refund">POST api/seller/orderitem/{id}/refund</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: May 25, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>Login endpoint'inden aldığın token'ı buraya gir.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-register">POST api/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"first_name\": \"vmqeopfuudtdsufvyvddq\",
    \"last_name\": \"amniihfqcoynlazghdtqt\",
    \"username\": \"qxbajwbpilpmufinllwlo\",
    \"email\": \"schmitt.beulah@example.org\",
    \"password\": \"LcDi`wmUB)z&amp;~na%\",
    \"phone\": \"yickznkygloigmkwx\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "vmqeopfuudtdsufvyvddq",
    "last_name": "amniihfqcoynlazghdtqt",
    "username": "qxbajwbpilpmufinllwlo",
    "email": "schmitt.beulah@example.org",
    "password": "LcDi`wmUB)z&amp;~na%",
    "phone": "yickznkygloigmkwx"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="POSTapi-register"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must be at least 3 characters. Must not be greater than 100 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="POSTapi-register"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must be at least 3 characters. Must not be greater than 100 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>username</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="username"                data-endpoint="POSTapi-register"
               value="qxbajwbpilpmufinllwlo"
               data-component="body">
    <br>
<p>Must not be greater than 50 characters. Example: <code>qxbajwbpilpmufinllwlo</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-register"
               value="schmitt.beulah@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>schmitt.beulah@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-register"
               value="LcDi`wmUB)z&~na%"
               data-component="body">
    <br>
<p>Must match the regex /[A-Z]/. Must match the regex /[a-z]/. Must match the regex /[0-9]/. Must be at least 8 characters. Example: <code>LcDi</code>wmUB)z&amp;~na%`</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-register"
               value="yickznkygloigmkwx"
               data-component="body">
    <br>
<p>Must match the regex /^[0-9+-\s()]+$/. Must not be greater than 20 characters. Example: <code>yickznkygloigmkwx</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-login">POST api/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"qkunze@example.com\",
    \"password\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qkunze@example.com",
    "password": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-forgot-password">POST api/forgot-password</h2>

<p>
</p>



<span id="example-requests-POSTapi-forgot-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/forgot-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"qkunze@example.com\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/forgot-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qkunze@example.com"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-forgot-password">
</span>
<span id="execution-results-POSTapi-forgot-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-forgot-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-forgot-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-forgot-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-forgot-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-forgot-password" data-method="POST"
      data-path="api/forgot-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-forgot-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-forgot-password"
                    onclick="tryItOut('POSTapi-forgot-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-forgot-password"
                    onclick="cancelTryOut('POSTapi-forgot-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-forgot-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/forgot-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-forgot-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-forgot-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-forgot-password"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. The <code>email</code> of an existing record in the users table. Example: <code>qkunze@example.com</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-reset-password">POST api/reset-password</h2>

<p>
</p>



<span id="example-requests-POSTapi-reset-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/reset-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"token\": \"consequatur\",
    \"email\": \"carolyne.luettgen@example.org\",
    \"password\": \"ij-e\\/dl4m\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/reset-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "token": "consequatur",
    "email": "carolyne.luettgen@example.org",
    "password": "ij-e\/dl4m"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-reset-password">
</span>
<span id="execution-results-POSTapi-reset-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-reset-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-reset-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-reset-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-reset-password" data-method="POST"
      data-path="api/reset-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-reset-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-reset-password"
                    onclick="tryItOut('POSTapi-reset-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-reset-password"
                    onclick="cancelTryOut('POSTapi-reset-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-reset-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/reset-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>token</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="token"                data-endpoint="POSTapi-reset-password"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-reset-password"
               value="carolyne.luettgen@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. The <code>email</code> of an existing record in the users table. Example: <code>carolyne.luettgen@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-reset-password"
               value="ij-e/dl4m"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>ij-e/dl4m</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-seller-login">POST api/seller/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-seller-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/seller/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"qkunze@example.com\",
    \"password\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qkunze@example.com",
    "password": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-seller-login">
</span>
<span id="execution-results-POSTapi-seller-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-seller-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-seller-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-seller-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-seller-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-seller-login" data-method="POST"
      data-path="api/seller/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-seller-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-seller-login"
                    onclick="tryItOut('POSTapi-seller-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-seller-login"
                    onclick="cancelTryOut('POSTapi-seller-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-seller-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/seller/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-seller-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-seller-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-seller-login"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-seller-login"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-main">GET api/main</h2>

<p>
</p>



<span id="example-requests-GETapi-main">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/main" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/main"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-main">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;products&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;store_id&quot;: 1,
                &quot;title&quot;: &quot;Erkek &Ccedil;ocuk Eşofman Takımı&quot;,
                &quot;slug&quot;: &quot;erkek-cocuk-esofman-takimi&quot;,
                &quot;category&quot;: {
                    &quot;id&quot;: 6,
                    &quot;title&quot;: &quot;Eşofman Takım&quot;,
                    &quot;slug&quot;: &quot;unisex-esofman-takim&quot;,
                    &quot;gender_id&quot;: 3,
                    &quot;parent_id&quot;: 3,
                    &quot;gender&quot;: {
                        &quot;id&quot;: 3,
                        &quot;title&quot;: &quot;Unisex&quot;,
                        &quot;slug&quot;: &quot;unisex&quot;
                    },
                    &quot;parent&quot;: {
                        &quot;id&quot;: 3,
                        &quot;title&quot;: &quot;Eşofman Takım&quot;,
                        &quot;slug&quot;: &quot;esofman-takim&quot;,
                        &quot;gender_id&quot;: null,
                        &quot;parent_id&quot;: null
                    },
                    &quot;children&quot;: []
                },
                &quot;description&quot;: &quot;Kaliteli pamuklu erkek &ccedil;ocuk eşofman takımı&quot;,
                &quot;meta_title&quot;: null,
                &quot;meta_description&quot;: null,
                &quot;is_published&quot;: true,
                &quot;variants&quot;: [
                    {
                        &quot;id&quot;: 2,
                        &quot;product_id&quot;: 1,
                        &quot;sku&quot;: &quot;ESF-ERK-001-SYH&quot;,
                        &quot;slug&quot;: &quot;erkek-esofman-siyah&quot;,
                        &quot;color_name&quot;: &quot;Siyah&quot;,
                        &quot;color_code&quot;: &quot;#000000&quot;,
                        &quot;price_cents&quot;: 34900,
                        &quot;is_popular&quot;: false,
                        &quot;is_active&quot;: true,
                        &quot;images&quot;: [
                            {
                                &quot;id&quot;: 3,
                                &quot;product_variant_id&quot;: 2,
                                &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/esofman.png&quot;,
                                &quot;is_primary&quot;: true,
                                &quot;sort_order&quot;: 1
                            },
                            {
                                &quot;id&quot;: 4,
                                &quot;product_variant_id&quot;: 2,
                                &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/esofman1.png&quot;,
                                &quot;is_primary&quot;: false,
                                &quot;sort_order&quot;: 2
                            },
                            {
                                &quot;id&quot;: 5,
                                &quot;product_variant_id&quot;: 2,
                                &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/esofman2.png&quot;,
                                &quot;is_primary&quot;: false,
                                &quot;sort_order&quot;: 3
                            },
                            {
                                &quot;id&quot;: 11,
                                &quot;product_variant_id&quot;: 2,
                                &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/esofman.png&quot;,
                                &quot;is_primary&quot;: true,
                                &quot;sort_order&quot;: 1
                            },
                            {
                                &quot;id&quot;: 12,
                                &quot;product_variant_id&quot;: 2,
                                &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/esofman1.png&quot;,
                                &quot;is_primary&quot;: false,
                                &quot;sort_order&quot;: 2
                            },
                            {
                                &quot;id&quot;: 13,
                                &quot;product_variant_id&quot;: 2,
                                &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/esofman2.png&quot;,
                                &quot;is_primary&quot;: false,
                                &quot;sort_order&quot;: 3
                            }
                        ],
                        &quot;sizes&quot;: [
                            {
                                &quot;id&quot;: 12,
                                &quot;product_variant_id&quot;: 2,
                                &quot;size_option_id&quot;: 1,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 1,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;6 Yaş&quot;,
                                    &quot;slug&quot;: &quot;6-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-SYH-6YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 12,
                                    &quot;variant_size_id&quot;: 12,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 26,
                                    &quot;reserved&quot;: 0,
                                    &quot;available&quot;: 26,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 13,
                                &quot;product_variant_id&quot;: 2,
                                &quot;size_option_id&quot;: 2,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 2,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;7 Yaş&quot;,
                                    &quot;slug&quot;: &quot;7-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-SYH-7YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 13,
                                    &quot;variant_size_id&quot;: 13,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 0,
                                    &quot;reserved&quot;: 0,
                                    &quot;available&quot;: 0,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 14,
                                &quot;product_variant_id&quot;: 2,
                                &quot;size_option_id&quot;: 3,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 3,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;8 Yaş&quot;,
                                    &quot;slug&quot;: &quot;8-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-SYH-8YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 14,
                                    &quot;variant_size_id&quot;: 14,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 38,
                                    &quot;reserved&quot;: 1,
                                    &quot;available&quot;: 37,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 15,
                                &quot;product_variant_id&quot;: 2,
                                &quot;size_option_id&quot;: 4,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 4,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;9 Yaş&quot;,
                                    &quot;slug&quot;: &quot;9-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-SYH-9YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 15,
                                    &quot;variant_size_id&quot;: 15,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 27,
                                    &quot;reserved&quot;: 5,
                                    &quot;available&quot;: 22,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 16,
                                &quot;product_variant_id&quot;: 2,
                                &quot;size_option_id&quot;: 5,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 5,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;10 Yaş&quot;,
                                    &quot;slug&quot;: &quot;10-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-SYH-10YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 16,
                                    &quot;variant_size_id&quot;: 16,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 42,
                                    &quot;reserved&quot;: 1,
                                    &quot;available&quot;: 41,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 17,
                                &quot;product_variant_id&quot;: 2,
                                &quot;size_option_id&quot;: 6,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 6,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;11 Yaş&quot;,
                                    &quot;slug&quot;: &quot;11-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-SYH-11YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 17,
                                    &quot;variant_size_id&quot;: 17,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 45,
                                    &quot;reserved&quot;: 2,
                                    &quot;available&quot;: 43,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 18,
                                &quot;product_variant_id&quot;: 2,
                                &quot;size_option_id&quot;: 7,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 7,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;12 Yaş&quot;,
                                    &quot;slug&quot;: &quot;12-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-SYH-12YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 18,
                                    &quot;variant_size_id&quot;: 18,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 22,
                                    &quot;reserved&quot;: 5,
                                    &quot;available&quot;: 17,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 19,
                                &quot;product_variant_id&quot;: 2,
                                &quot;size_option_id&quot;: 8,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 8,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;13 Yaş&quot;,
                                    &quot;slug&quot;: &quot;13-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-SYH-13YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 19,
                                    &quot;variant_size_id&quot;: 19,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 33,
                                    &quot;reserved&quot;: 1,
                                    &quot;available&quot;: 32,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 20,
                                &quot;product_variant_id&quot;: 2,
                                &quot;size_option_id&quot;: 9,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 9,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;14 Yaş&quot;,
                                    &quot;slug&quot;: &quot;14-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-SYH-14YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 20,
                                    &quot;variant_size_id&quot;: 20,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 30,
                                    &quot;reserved&quot;: 3,
                                    &quot;available&quot;: 27,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 21,
                                &quot;product_variant_id&quot;: 2,
                                &quot;size_option_id&quot;: 10,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 10,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;15 Yaş&quot;,
                                    &quot;slug&quot;: &quot;15-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-SYH-15YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 21,
                                    &quot;variant_size_id&quot;: 21,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 46,
                                    &quot;reserved&quot;: 0,
                                    &quot;available&quot;: 46,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 22,
                                &quot;product_variant_id&quot;: 2,
                                &quot;size_option_id&quot;: 11,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 11,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;16 Yaş&quot;,
                                    &quot;slug&quot;: &quot;16-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-SYH-16YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 22,
                                    &quot;variant_size_id&quot;: 22,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 12,
                                    &quot;reserved&quot;: 3,
                                    &quot;available&quot;: 9,
                                    &quot;min_stock_level&quot;: 5
                                }
                            }
                        ]
                    },
                    {
                        &quot;id&quot;: 1,
                        &quot;product_id&quot;: 1,
                        &quot;sku&quot;: &quot;ERK-1-MAVI-1&quot;,
                        &quot;slug&quot;: &quot;erkek-cocuk-esofman-takimi-mavi-1&quot;,
                        &quot;color_name&quot;: &quot;Mavi&quot;,
                        &quot;color_code&quot;: &quot;#0066CC&quot;,
                        &quot;price_cents&quot;: 31900,
                        &quot;is_popular&quot;: true,
                        &quot;is_active&quot;: true,
                        &quot;images&quot;: [
                            {
                                &quot;id&quot;: 14,
                                &quot;product_variant_id&quot;: 1,
                                &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/iKQdu6y7dAHTcCMhzZWpGRrbAKrBWpow1EEh5Awr.png&quot;,
                                &quot;is_primary&quot;: false,
                                &quot;sort_order&quot;: 0
                            },
                            {
                                &quot;id&quot;: 15,
                                &quot;product_variant_id&quot;: 1,
                                &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/hUyP379CUhudAlUGOM5z5a8TFEPEko619YjMzj03.png&quot;,
                                &quot;is_primary&quot;: false,
                                &quot;sort_order&quot;: 0
                            }
                        ],
                        &quot;sizes&quot;: [
                            {
                                &quot;id&quot;: 1,
                                &quot;product_variant_id&quot;: 1,
                                &quot;size_option_id&quot;: 1,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 1,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;6 Yaş&quot;,
                                    &quot;slug&quot;: &quot;6-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-MAV-6YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 1,
                                    &quot;variant_size_id&quot;: 1,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 20,
                                    &quot;reserved&quot;: 1,
                                    &quot;available&quot;: 19,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 2,
                                &quot;product_variant_id&quot;: 1,
                                &quot;size_option_id&quot;: 2,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 2,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;7 Yaş&quot;,
                                    &quot;slug&quot;: &quot;7-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-MAV-7YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 2,
                                    &quot;variant_size_id&quot;: 2,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 12,
                                    &quot;reserved&quot;: 2,
                                    &quot;available&quot;: 10,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 3,
                                &quot;product_variant_id&quot;: 1,
                                &quot;size_option_id&quot;: 3,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 3,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;8 Yaş&quot;,
                                    &quot;slug&quot;: &quot;8-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-MAV-8YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 3,
                                    &quot;variant_size_id&quot;: 3,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 31,
                                    &quot;reserved&quot;: 5,
                                    &quot;available&quot;: 26,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 4,
                                &quot;product_variant_id&quot;: 1,
                                &quot;size_option_id&quot;: 4,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 4,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;9 Yaş&quot;,
                                    &quot;slug&quot;: &quot;9-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-MAV-9YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 4,
                                    &quot;variant_size_id&quot;: 4,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 16,
                                    &quot;reserved&quot;: 4,
                                    &quot;available&quot;: 12,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 5,
                                &quot;product_variant_id&quot;: 1,
                                &quot;size_option_id&quot;: 5,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 5,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;10 Yaş&quot;,
                                    &quot;slug&quot;: &quot;10-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-MAV-10YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 5,
                                    &quot;variant_size_id&quot;: 5,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 29,
                                    &quot;reserved&quot;: 3,
                                    &quot;available&quot;: 26,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 6,
                                &quot;product_variant_id&quot;: 1,
                                &quot;size_option_id&quot;: 6,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 6,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;11 Yaş&quot;,
                                    &quot;slug&quot;: &quot;11-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-MAV-11YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 6,
                                    &quot;variant_size_id&quot;: 6,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 25,
                                    &quot;reserved&quot;: 3,
                                    &quot;available&quot;: 22,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 7,
                                &quot;product_variant_id&quot;: 1,
                                &quot;size_option_id&quot;: 7,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 7,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;12 Yaş&quot;,
                                    &quot;slug&quot;: &quot;12-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-MAV-12YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 7,
                                    &quot;variant_size_id&quot;: 7,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 24,
                                    &quot;reserved&quot;: 2,
                                    &quot;available&quot;: 22,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 8,
                                &quot;product_variant_id&quot;: 1,
                                &quot;size_option_id&quot;: 8,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 8,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;13 Yaş&quot;,
                                    &quot;slug&quot;: &quot;13-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-MAV-13YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 8,
                                    &quot;variant_size_id&quot;: 8,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 20,
                                    &quot;reserved&quot;: 4,
                                    &quot;available&quot;: 16,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 9,
                                &quot;product_variant_id&quot;: 1,
                                &quot;size_option_id&quot;: 9,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 9,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;14 Yaş&quot;,
                                    &quot;slug&quot;: &quot;14-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-MAV-14YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 9,
                                    &quot;variant_size_id&quot;: 9,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 27,
                                    &quot;reserved&quot;: 2,
                                    &quot;available&quot;: 25,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 10,
                                &quot;product_variant_id&quot;: 1,
                                &quot;size_option_id&quot;: 10,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 10,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;15 Yaş&quot;,
                                    &quot;slug&quot;: &quot;15-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-MAV-15YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 10,
                                    &quot;variant_size_id&quot;: 10,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 25,
                                    &quot;reserved&quot;: 3,
                                    &quot;available&quot;: 22,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 11,
                                &quot;product_variant_id&quot;: 1,
                                &quot;size_option_id&quot;: 11,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 11,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;16 Yaş&quot;,
                                    &quot;slug&quot;: &quot;16-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ESF-ERK-001-MAV-16YAS&quot;,
                                &quot;price_cents&quot;: 34900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 11,
                                    &quot;variant_size_id&quot;: 11,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 12,
                                    &quot;reserved&quot;: 5,
                                    &quot;available&quot;: 7,
                                    &quot;min_stock_level&quot;: 5
                                }
                            }
                        ]
                    },
                    {
                        &quot;id&quot;: 7,
                        &quot;product_id&quot;: 1,
                        &quot;sku&quot;: &quot;ERK-1-MAVI-7&quot;,
                        &quot;slug&quot;: &quot;erkek-cocuk-esofman-takimi-mavi-7&quot;,
                        &quot;color_name&quot;: &quot;Mavi&quot;,
                        &quot;color_code&quot;: &quot;#000000&quot;,
                        &quot;price_cents&quot;: 11111,
                        &quot;is_popular&quot;: false,
                        &quot;is_active&quot;: true,
                        &quot;images&quot;: [],
                        &quot;sizes&quot;: [
                            {
                                &quot;id&quot;: 57,
                                &quot;product_variant_id&quot;: 7,
                                &quot;size_option_id&quot;: 5,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 5,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;10 Yaş&quot;,
                                    &quot;slug&quot;: &quot;10-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ERK-1-MAVI-7-10-yas&quot;,
                                &quot;price_cents&quot;: 11111,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 57,
                                    &quot;variant_size_id&quot;: 57,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 9,
                                    &quot;reserved&quot;: 0,
                                    &quot;available&quot;: 9,
                                    &quot;min_stock_level&quot;: 0
                                }
                            }
                        ]
                    },
                    {
                        &quot;id&quot;: 8,
                        &quot;product_id&quot;: 1,
                        &quot;sku&quot;: &quot;ERK-1-YESIL-8&quot;,
                        &quot;slug&quot;: &quot;erkek-cocuk-esofman-takimi-yesil-8&quot;,
                        &quot;color_name&quot;: &quot;Yeşil&quot;,
                        &quot;color_code&quot;: &quot;#000000&quot;,
                        &quot;price_cents&quot;: 1111,
                        &quot;is_popular&quot;: false,
                        &quot;is_active&quot;: true,
                        &quot;images&quot;: [],
                        &quot;sizes&quot;: [
                            {
                                &quot;id&quot;: 58,
                                &quot;product_variant_id&quot;: 8,
                                &quot;size_option_id&quot;: 4,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 4,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;9 Yaş&quot;,
                                    &quot;slug&quot;: &quot;9-yas&quot;
                                },
                                &quot;sku&quot;: &quot;ERK-1-YESIL-8-9-yas&quot;,
                                &quot;price_cents&quot;: 1111,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 58,
                                    &quot;variant_size_id&quot;: 58,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 11,
                                    &quot;reserved&quot;: 0,
                                    &quot;available&quot;: 11,
                                    &quot;min_stock_level&quot;: 0
                                }
                            }
                        ]
                    }
                ],
                &quot;created_at&quot;: &quot;2026-05-15T19:37:44.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-05-25T21:33:58.000000Z&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;store_id&quot;: 1,
                &quot;title&quot;: &quot;Kız &Ccedil;ocuk Jean Pantolon&quot;,
                &quot;slug&quot;: &quot;kiz-cocuk-jean-pantolon&quot;,
                &quot;category&quot;: {
                    &quot;id&quot;: 7,
                    &quot;title&quot;: &quot;Jean&quot;,
                    &quot;slug&quot;: &quot;erkek-cocuk-jean&quot;,
                    &quot;gender_id&quot;: 1,
                    &quot;parent_id&quot;: 1,
                    &quot;gender&quot;: {
                        &quot;id&quot;: 1,
                        &quot;title&quot;: &quot;Erkek &Ccedil;ocuk&quot;,
                        &quot;slug&quot;: &quot;erkek-cocuk&quot;
                    },
                    &quot;parent&quot;: {
                        &quot;id&quot;: 1,
                        &quot;title&quot;: &quot;Jean&quot;,
                        &quot;slug&quot;: &quot;jean&quot;,
                        &quot;gender_id&quot;: null,
                        &quot;parent_id&quot;: null
                    },
                    &quot;children&quot;: []
                },
                &quot;description&quot;: &quot;Şık ve rahat kız jean pantolonu&quot;,
                &quot;meta_title&quot;: null,
                &quot;meta_description&quot;: null,
                &quot;is_published&quot;: true,
                &quot;variants&quot;: [
                    {
                        &quot;id&quot;: 5,
                        &quot;product_id&quot;: 2,
                        &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH&quot;,
                        &quot;slug&quot;: &quot;kiz-jean-siyah&quot;,
                        &quot;color_name&quot;: &quot;Siyah&quot;,
                        &quot;color_code&quot;: &quot;#000000&quot;,
                        &quot;price_cents&quot;: 27900,
                        &quot;is_popular&quot;: false,
                        &quot;is_active&quot;: true,
                        &quot;images&quot;: [
                            {
                                &quot;id&quot;: 8,
                                &quot;product_variant_id&quot;: 5,
                                &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/jean-siyah.png&quot;,
                                &quot;is_primary&quot;: true,
                                &quot;sort_order&quot;: 1
                            }
                        ],
                        &quot;sizes&quot;: [
                            {
                                &quot;id&quot;: 45,
                                &quot;product_variant_id&quot;: 5,
                                &quot;size_option_id&quot;: 1,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 1,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;6 Yaş&quot;,
                                    &quot;slug&quot;: &quot;6-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-6YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 45,
                                    &quot;variant_size_id&quot;: 45,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 49,
                                    &quot;reserved&quot;: 0,
                                    &quot;available&quot;: 49,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 46,
                                &quot;product_variant_id&quot;: 5,
                                &quot;size_option_id&quot;: 2,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 2,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;7 Yaş&quot;,
                                    &quot;slug&quot;: &quot;7-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-7YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 46,
                                    &quot;variant_size_id&quot;: 46,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 12,
                                    &quot;reserved&quot;: 1,
                                    &quot;available&quot;: 11,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 47,
                                &quot;product_variant_id&quot;: 5,
                                &quot;size_option_id&quot;: 3,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 3,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;8 Yaş&quot;,
                                    &quot;slug&quot;: &quot;8-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-8YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 47,
                                    &quot;variant_size_id&quot;: 47,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 13,
                                    &quot;reserved&quot;: 5,
                                    &quot;available&quot;: 8,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 48,
                                &quot;product_variant_id&quot;: 5,
                                &quot;size_option_id&quot;: 4,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 4,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;9 Yaş&quot;,
                                    &quot;slug&quot;: &quot;9-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-9YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 48,
                                    &quot;variant_size_id&quot;: 48,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 14,
                                    &quot;reserved&quot;: 5,
                                    &quot;available&quot;: 9,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 49,
                                &quot;product_variant_id&quot;: 5,
                                &quot;size_option_id&quot;: 5,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 5,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;10 Yaş&quot;,
                                    &quot;slug&quot;: &quot;10-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-10YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 49,
                                    &quot;variant_size_id&quot;: 49,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 10,
                                    &quot;reserved&quot;: 3,
                                    &quot;available&quot;: 7,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 50,
                                &quot;product_variant_id&quot;: 5,
                                &quot;size_option_id&quot;: 6,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 6,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;11 Yaş&quot;,
                                    &quot;slug&quot;: &quot;11-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-11YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 50,
                                    &quot;variant_size_id&quot;: 50,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 14,
                                    &quot;reserved&quot;: 0,
                                    &quot;available&quot;: 14,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 51,
                                &quot;product_variant_id&quot;: 5,
                                &quot;size_option_id&quot;: 7,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 7,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;12 Yaş&quot;,
                                    &quot;slug&quot;: &quot;12-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-12YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 51,
                                    &quot;variant_size_id&quot;: 51,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 17,
                                    &quot;reserved&quot;: 4,
                                    &quot;available&quot;: 13,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 52,
                                &quot;product_variant_id&quot;: 5,
                                &quot;size_option_id&quot;: 8,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 8,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;13 Yaş&quot;,
                                    &quot;slug&quot;: &quot;13-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-13YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 52,
                                    &quot;variant_size_id&quot;: 52,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 15,
                                    &quot;reserved&quot;: 0,
                                    &quot;available&quot;: 15,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 53,
                                &quot;product_variant_id&quot;: 5,
                                &quot;size_option_id&quot;: 9,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 9,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;14 Yaş&quot;,
                                    &quot;slug&quot;: &quot;14-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-14YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 53,
                                    &quot;variant_size_id&quot;: 53,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 31,
                                    &quot;reserved&quot;: 1,
                                    &quot;available&quot;: 30,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 54,
                                &quot;product_variant_id&quot;: 5,
                                &quot;size_option_id&quot;: 10,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 10,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;15 Yaş&quot;,
                                    &quot;slug&quot;: &quot;15-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-15YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 54,
                                    &quot;variant_size_id&quot;: 54,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 49,
                                    &quot;reserved&quot;: 0,
                                    &quot;available&quot;: 49,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 55,
                                &quot;product_variant_id&quot;: 5,
                                &quot;size_option_id&quot;: 11,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 11,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;16 Yaş&quot;,
                                    &quot;slug&quot;: &quot;16-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-16YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 55,
                                    &quot;variant_size_id&quot;: 55,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 20,
                                    &quot;reserved&quot;: 0,
                                    &quot;available&quot;: 20,
                                    &quot;min_stock_level&quot;: 5
                                }
                            }
                        ]
                    },
                    {
                        &quot;id&quot;: 3,
                        &quot;product_id&quot;: 2,
                        &quot;sku&quot;: &quot;KI-2-ACIK0MAVI-3&quot;,
                        &quot;slug&quot;: &quot;kiz-cocuk-jean-pantolon-acik0mavi-3&quot;,
                        &quot;color_name&quot;: &quot;A&ccedil;ık Mavi&quot;,
                        &quot;color_code&quot;: &quot;#87CEEB&quot;,
                        &quot;price_cents&quot;: 47900,
                        &quot;is_popular&quot;: false,
                        &quot;is_active&quot;: true,
                        &quot;images&quot;: [
                            {
                                &quot;id&quot;: 6,
                                &quot;product_variant_id&quot;: 3,
                                &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/jean-acik-mavi.png&quot;,
                                &quot;is_primary&quot;: true,
                                &quot;sort_order&quot;: 1
                            }
                        ],
                        &quot;sizes&quot;: [
                            {
                                &quot;id&quot;: 23,
                                &quot;product_variant_id&quot;: 3,
                                &quot;size_option_id&quot;: 1,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 1,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;6 Yaş&quot;,
                                    &quot;slug&quot;: &quot;6-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-6YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 23,
                                    &quot;variant_size_id&quot;: 23,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 19,
                                    &quot;reserved&quot;: 3,
                                    &quot;available&quot;: 16,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 24,
                                &quot;product_variant_id&quot;: 3,
                                &quot;size_option_id&quot;: 2,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 2,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;7 Yaş&quot;,
                                    &quot;slug&quot;: &quot;7-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-7YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 24,
                                    &quot;variant_size_id&quot;: 24,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 41,
                                    &quot;reserved&quot;: 2,
                                    &quot;available&quot;: 39,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 25,
                                &quot;product_variant_id&quot;: 3,
                                &quot;size_option_id&quot;: 3,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 3,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;8 Yaş&quot;,
                                    &quot;slug&quot;: &quot;8-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-8YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 25,
                                    &quot;variant_size_id&quot;: 25,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 36,
                                    &quot;reserved&quot;: 1,
                                    &quot;available&quot;: 35,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 26,
                                &quot;product_variant_id&quot;: 3,
                                &quot;size_option_id&quot;: 4,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 4,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;9 Yaş&quot;,
                                    &quot;slug&quot;: &quot;9-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-9YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 26,
                                    &quot;variant_size_id&quot;: 26,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 44,
                                    &quot;reserved&quot;: 1,
                                    &quot;available&quot;: 43,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 27,
                                &quot;product_variant_id&quot;: 3,
                                &quot;size_option_id&quot;: 5,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 5,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;10 Yaş&quot;,
                                    &quot;slug&quot;: &quot;10-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-10YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 27,
                                    &quot;variant_size_id&quot;: 27,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 49,
                                    &quot;reserved&quot;: 0,
                                    &quot;available&quot;: 49,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 28,
                                &quot;product_variant_id&quot;: 3,
                                &quot;size_option_id&quot;: 6,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 6,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;11 Yaş&quot;,
                                    &quot;slug&quot;: &quot;11-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-11YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 28,
                                    &quot;variant_size_id&quot;: 28,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 31,
                                    &quot;reserved&quot;: 3,
                                    &quot;available&quot;: 28,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 29,
                                &quot;product_variant_id&quot;: 3,
                                &quot;size_option_id&quot;: 7,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 7,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;12 Yaş&quot;,
                                    &quot;slug&quot;: &quot;12-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-12YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 29,
                                    &quot;variant_size_id&quot;: 29,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 12,
                                    &quot;reserved&quot;: 3,
                                    &quot;available&quot;: 9,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 30,
                                &quot;product_variant_id&quot;: 3,
                                &quot;size_option_id&quot;: 8,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 8,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;13 Yaş&quot;,
                                    &quot;slug&quot;: &quot;13-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-13YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 30,
                                    &quot;variant_size_id&quot;: 30,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 10,
                                    &quot;reserved&quot;: 2,
                                    &quot;available&quot;: 8,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 31,
                                &quot;product_variant_id&quot;: 3,
                                &quot;size_option_id&quot;: 9,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 9,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;14 Yaş&quot;,
                                    &quot;slug&quot;: &quot;14-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-14YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 31,
                                    &quot;variant_size_id&quot;: 31,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 23,
                                    &quot;reserved&quot;: 1,
                                    &quot;available&quot;: 22,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 32,
                                &quot;product_variant_id&quot;: 3,
                                &quot;size_option_id&quot;: 10,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 10,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;15 Yaş&quot;,
                                    &quot;slug&quot;: &quot;15-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-15YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 32,
                                    &quot;variant_size_id&quot;: 32,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 44,
                                    &quot;reserved&quot;: 4,
                                    &quot;available&quot;: 40,
                                    &quot;min_stock_level&quot;: 5
                                }
                            },
                            {
                                &quot;id&quot;: 33,
                                &quot;product_variant_id&quot;: 3,
                                &quot;size_option_id&quot;: 11,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 11,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;16 Yaş&quot;,
                                    &quot;slug&quot;: &quot;16-yas&quot;
                                },
                                &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-16YAS&quot;,
                                &quot;price_cents&quot;: 27900,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 33,
                                    &quot;variant_size_id&quot;: 33,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 21,
                                    &quot;reserved&quot;: 1,
                                    &quot;available&quot;: 20,
                                    &quot;min_stock_level&quot;: 5
                                }
                            }
                        ]
                    },
                    {
                        &quot;id&quot;: 6,
                        &quot;product_id&quot;: 2,
                        &quot;sku&quot;: &quot;KI-2-SIYAH-6&quot;,
                        &quot;slug&quot;: &quot;kiz-cocuk-jean-pantolon-siyah-6&quot;,
                        &quot;color_name&quot;: &quot;Siyah&quot;,
                        &quot;color_code&quot;: &quot;#111111&quot;,
                        &quot;price_cents&quot;: 1111,
                        &quot;is_popular&quot;: true,
                        &quot;is_active&quot;: true,
                        &quot;images&quot;: [],
                        &quot;sizes&quot;: [
                            {
                                &quot;id&quot;: 56,
                                &quot;product_variant_id&quot;: 6,
                                &quot;size_option_id&quot;: 4,
                                &quot;size_option&quot;: {
                                    &quot;id&quot;: 4,
                                    &quot;attribute_id&quot;: 1,
                                    &quot;value&quot;: &quot;9 Yaş&quot;,
                                    &quot;slug&quot;: &quot;9-yas&quot;
                                },
                                &quot;sku&quot;: &quot;KI-2-SIYAH-6-9-yas&quot;,
                                &quot;price_cents&quot;: 1111,
                                &quot;is_active&quot;: true,
                                &quot;inventory&quot;: {
                                    &quot;id&quot;: 56,
                                    &quot;variant_size_id&quot;: 56,
                                    &quot;warehouse_id&quot;: 1,
                                    &quot;on_hand&quot;: 11,
                                    &quot;reserved&quot;: 1,
                                    &quot;available&quot;: 10,
                                    &quot;min_stock_level&quot;: 10
                                }
                            }
                        ]
                    }
                ],
                &quot;created_at&quot;: &quot;2026-05-15T19:37:44.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-05-25T14:05:48.000000Z&quot;
            }
        ],
        &quot;categories&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;Jean&quot;,
                &quot;slug&quot;: &quot;jean&quot;,
                &quot;gender_id&quot;: null,
                &quot;parent_id&quot;: null,
                &quot;gender&quot;: null,
                &quot;children&quot;: [
                    {
                        &quot;id&quot;: 4,
                        &quot;title&quot;: &quot;Jean&quot;,
                        &quot;slug&quot;: &quot;unisex-jean&quot;,
                        &quot;gender_id&quot;: 3,
                        &quot;parent_id&quot;: 1
                    },
                    {
                        &quot;id&quot;: 7,
                        &quot;title&quot;: &quot;Jean&quot;,
                        &quot;slug&quot;: &quot;erkek-cocuk-jean&quot;,
                        &quot;gender_id&quot;: 1,
                        &quot;parent_id&quot;: 1
                    },
                    {
                        &quot;id&quot;: 10,
                        &quot;title&quot;: &quot;Jean&quot;,
                        &quot;slug&quot;: &quot;kiz-cocuk-jean&quot;,
                        &quot;gender_id&quot;: 2,
                        &quot;parent_id&quot;: 1
                    }
                ]
            },
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;Keten&quot;,
                &quot;slug&quot;: &quot;keten&quot;,
                &quot;gender_id&quot;: null,
                &quot;parent_id&quot;: null,
                &quot;gender&quot;: null,
                &quot;children&quot;: [
                    {
                        &quot;id&quot;: 5,
                        &quot;title&quot;: &quot;Keten&quot;,
                        &quot;slug&quot;: &quot;unisex-keten&quot;,
                        &quot;gender_id&quot;: 3,
                        &quot;parent_id&quot;: 2
                    },
                    {
                        &quot;id&quot;: 8,
                        &quot;title&quot;: &quot;Keten&quot;,
                        &quot;slug&quot;: &quot;erkek-cocuk-keten&quot;,
                        &quot;gender_id&quot;: 1,
                        &quot;parent_id&quot;: 2
                    },
                    {
                        &quot;id&quot;: 11,
                        &quot;title&quot;: &quot;Keten&quot;,
                        &quot;slug&quot;: &quot;kiz-cocuk-keten&quot;,
                        &quot;gender_id&quot;: 2,
                        &quot;parent_id&quot;: 2
                    }
                ]
            },
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;Eşofman Takım&quot;,
                &quot;slug&quot;: &quot;esofman-takim&quot;,
                &quot;gender_id&quot;: null,
                &quot;parent_id&quot;: null,
                &quot;gender&quot;: null,
                &quot;children&quot;: [
                    {
                        &quot;id&quot;: 6,
                        &quot;title&quot;: &quot;Eşofman Takım&quot;,
                        &quot;slug&quot;: &quot;unisex-esofman-takim&quot;,
                        &quot;gender_id&quot;: 3,
                        &quot;parent_id&quot;: 3
                    },
                    {
                        &quot;id&quot;: 9,
                        &quot;title&quot;: &quot;Eşofman Takım&quot;,
                        &quot;slug&quot;: &quot;erkek-cocuk-esofman-takim&quot;,
                        &quot;gender_id&quot;: 1,
                        &quot;parent_id&quot;: 3
                    },
                    {
                        &quot;id&quot;: 12,
                        &quot;title&quot;: &quot;Eşofman Takım&quot;,
                        &quot;slug&quot;: &quot;kiz-cocuk-esofman-takim&quot;,
                        &quot;gender_id&quot;: 2,
                        &quot;parent_id&quot;: 3
                    }
                ]
            },
            {
                &quot;id&quot;: 4,
                &quot;title&quot;: &quot;Jean&quot;,
                &quot;slug&quot;: &quot;unisex-jean&quot;,
                &quot;gender_id&quot;: 3,
                &quot;parent_id&quot;: 1,
                &quot;gender&quot;: {
                    &quot;id&quot;: 3,
                    &quot;title&quot;: &quot;Unisex&quot;,
                    &quot;slug&quot;: &quot;unisex&quot;
                },
                &quot;children&quot;: []
            },
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;Keten&quot;,
                &quot;slug&quot;: &quot;unisex-keten&quot;,
                &quot;gender_id&quot;: 3,
                &quot;parent_id&quot;: 2,
                &quot;gender&quot;: {
                    &quot;id&quot;: 3,
                    &quot;title&quot;: &quot;Unisex&quot;,
                    &quot;slug&quot;: &quot;unisex&quot;
                },
                &quot;children&quot;: []
            },
            {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;Eşofman Takım&quot;,
                &quot;slug&quot;: &quot;unisex-esofman-takim&quot;,
                &quot;gender_id&quot;: 3,
                &quot;parent_id&quot;: 3,
                &quot;gender&quot;: {
                    &quot;id&quot;: 3,
                    &quot;title&quot;: &quot;Unisex&quot;,
                    &quot;slug&quot;: &quot;unisex&quot;
                },
                &quot;children&quot;: []
            },
            {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;Jean&quot;,
                &quot;slug&quot;: &quot;erkek-cocuk-jean&quot;,
                &quot;gender_id&quot;: 1,
                &quot;parent_id&quot;: 1,
                &quot;gender&quot;: {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;Erkek &Ccedil;ocuk&quot;,
                    &quot;slug&quot;: &quot;erkek-cocuk&quot;
                },
                &quot;children&quot;: []
            },
            {
                &quot;id&quot;: 8,
                &quot;title&quot;: &quot;Keten&quot;,
                &quot;slug&quot;: &quot;erkek-cocuk-keten&quot;,
                &quot;gender_id&quot;: 1,
                &quot;parent_id&quot;: 2,
                &quot;gender&quot;: {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;Erkek &Ccedil;ocuk&quot;,
                    &quot;slug&quot;: &quot;erkek-cocuk&quot;
                },
                &quot;children&quot;: []
            },
            {
                &quot;id&quot;: 9,
                &quot;title&quot;: &quot;Eşofman Takım&quot;,
                &quot;slug&quot;: &quot;erkek-cocuk-esofman-takim&quot;,
                &quot;gender_id&quot;: 1,
                &quot;parent_id&quot;: 3,
                &quot;gender&quot;: {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;Erkek &Ccedil;ocuk&quot;,
                    &quot;slug&quot;: &quot;erkek-cocuk&quot;
                },
                &quot;children&quot;: []
            },
            {
                &quot;id&quot;: 10,
                &quot;title&quot;: &quot;Jean&quot;,
                &quot;slug&quot;: &quot;kiz-cocuk-jean&quot;,
                &quot;gender_id&quot;: 2,
                &quot;parent_id&quot;: 1,
                &quot;gender&quot;: {
                    &quot;id&quot;: 2,
                    &quot;title&quot;: &quot;Kız &Ccedil;ocuk&quot;,
                    &quot;slug&quot;: &quot;kiz-cocuk&quot;
                },
                &quot;children&quot;: []
            },
            {
                &quot;id&quot;: 11,
                &quot;title&quot;: &quot;Keten&quot;,
                &quot;slug&quot;: &quot;kiz-cocuk-keten&quot;,
                &quot;gender_id&quot;: 2,
                &quot;parent_id&quot;: 2,
                &quot;gender&quot;: {
                    &quot;id&quot;: 2,
                    &quot;title&quot;: &quot;Kız &Ccedil;ocuk&quot;,
                    &quot;slug&quot;: &quot;kiz-cocuk&quot;
                },
                &quot;children&quot;: []
            },
            {
                &quot;id&quot;: 12,
                &quot;title&quot;: &quot;Eşofman Takım&quot;,
                &quot;slug&quot;: &quot;kiz-cocuk-esofman-takim&quot;,
                &quot;gender_id&quot;: 2,
                &quot;parent_id&quot;: 3,
                &quot;gender&quot;: {
                    &quot;id&quot;: 2,
                    &quot;title&quot;: &quot;Kız &Ccedil;ocuk&quot;,
                    &quot;slug&quot;: &quot;kiz-cocuk&quot;
                },
                &quot;children&quot;: []
            }
        ],
        &quot;campaigns&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Kışa &Ouml;zel %25&quot;,
                &quot;description&quot;: &quot;Se&ccedil;ili &Uuml;r&uuml;nlerde Kışa &Ouml;zel %20&quot;,
                &quot;is_active&quot;: true
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;250 TL Sepet İndirimi&quot;,
                &quot;description&quot;: &quot;Se&ccedil;ili &Uuml;r&uuml;nlerde 250 TL Sepet İndirimi&quot;,
                &quot;is_active&quot;: true
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-main" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-main"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-main"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-main" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-main">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-main" data-method="GET"
      data-path="api/main"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-main', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-main"
                    onclick="tryItOut('GETapi-main');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-main"
                    onclick="cancelTryOut('GETapi-main');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-main"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/main</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-main"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-main"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-variant--variant_slug-">GET api/variant/{variant_slug}</h2>

<p>
</p>



<span id="example-requests-GETapi-variant--variant_slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/variant/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/variant/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-variant--variant_slug-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Varyant bulunamadı&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-variant--variant_slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-variant--variant_slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-variant--variant_slug-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-variant--variant_slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-variant--variant_slug-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-variant--variant_slug-" data-method="GET"
      data-path="api/variant/{variant_slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-variant--variant_slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-variant--variant_slug-"
                    onclick="tryItOut('GETapi-variant--variant_slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-variant--variant_slug-"
                    onclick="cancelTryOut('GETapi-variant--variant_slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-variant--variant_slug-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/variant/{variant_slug}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-variant--variant_slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-variant--variant_slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>variant_slug</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="variant_slug"                data-endpoint="GETapi-variant--variant_slug-"
               value="consequatur"
               data-component="url">
    <br>
<p>The slug of the variant. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-category--category_slug-">GET api/category/{category_slug}</h2>

<p>
</p>



<span id="example-requests-GETapi-category--category_slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/category/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/category/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-category--category_slug-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;products&quot;: [],
    &quot;filters&quot;: {
        &quot;category_ids&quot;: [],
        &quot;sorting&quot;: &quot;&quot;
    },
    &quot;categories&quot;: [],
    &quot;total&quot;: 0,
    &quot;pagination&quot;: {
        &quot;page&quot;: 1,
        &quot;size&quot;: 1000
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-category--category_slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-category--category_slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-category--category_slug-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-category--category_slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-category--category_slug-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-category--category_slug-" data-method="GET"
      data-path="api/category/{category_slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-category--category_slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-category--category_slug-"
                    onclick="tryItOut('GETapi-category--category_slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-category--category_slug-"
                    onclick="cancelTryOut('GETapi-category--category_slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-category--category_slug-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/category/{category_slug}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-category--category_slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-category--category_slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>category_slug</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="category_slug"                data-endpoint="GETapi-category--category_slug-"
               value="1"
               data-component="url">
    <br>
<p>The slug of the category. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-search">GET api/search</h2>

<p>
</p>



<span id="example-requests-GETapi-search">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/search" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/search"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-search">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;total&quot;: 2,
    &quot;page&quot;: 1,
    &quot;size&quot;: 12,
    &quot;query&quot;: &quot;&quot;,
    &quot;products&quot;: [
        {
            &quot;id&quot;: 2,
            &quot;store_id&quot;: 1,
            &quot;title&quot;: &quot;Kız &Ccedil;ocuk Jean Pantolon&quot;,
            &quot;slug&quot;: &quot;kiz-cocuk-jean-pantolon&quot;,
            &quot;category&quot;: {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;Jean&quot;,
                &quot;slug&quot;: &quot;erkek-cocuk-jean&quot;,
                &quot;gender_id&quot;: 1,
                &quot;parent_id&quot;: 1,
                &quot;gender&quot;: {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;Erkek &Ccedil;ocuk&quot;,
                    &quot;slug&quot;: &quot;erkek-cocuk&quot;
                },
                &quot;parent&quot;: {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;Jean&quot;,
                    &quot;slug&quot;: &quot;jean&quot;
                }
            },
            &quot;description&quot;: &quot;Şık ve rahat kız jean pantolonu&quot;,
            &quot;meta_title&quot;: null,
            &quot;meta_description&quot;: null,
            &quot;is_published&quot;: true,
            &quot;variants&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH&quot;,
                    &quot;slug&quot;: &quot;kiz-jean-siyah&quot;,
                    &quot;price_cents&quot;: 27900,
                    &quot;color_name&quot;: &quot;Siyah&quot;,
                    &quot;color_code&quot;: &quot;#000000&quot;,
                    &quot;is_popular&quot;: false,
                    &quot;is_active&quot;: true,
                    &quot;images&quot;: [
                        {
                            &quot;id&quot;: 8,
                            &quot;product_variant_id&quot;: 5,
                            &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/jean-siyah.png&quot;,
                            &quot;is_primary&quot;: true,
                            &quot;sort_order&quot;: 1
                        }
                    ],
                    &quot;sizes&quot;: [
                        {
                            &quot;id&quot;: 45,
                            &quot;product_variant_id&quot;: 5,
                            &quot;size_option_id&quot;: 1,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 1,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;6 Yaş&quot;,
                                &quot;slug&quot;: &quot;6-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-6YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 45,
                                &quot;variant_size_id&quot;: 45,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 49,
                                &quot;reserved&quot;: 0,
                                &quot;available&quot;: 49,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 46,
                            &quot;product_variant_id&quot;: 5,
                            &quot;size_option_id&quot;: 2,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 2,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;7 Yaş&quot;,
                                &quot;slug&quot;: &quot;7-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-7YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 46,
                                &quot;variant_size_id&quot;: 46,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 12,
                                &quot;reserved&quot;: 1,
                                &quot;available&quot;: 11,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 47,
                            &quot;product_variant_id&quot;: 5,
                            &quot;size_option_id&quot;: 3,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 3,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;8 Yaş&quot;,
                                &quot;slug&quot;: &quot;8-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-8YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 47,
                                &quot;variant_size_id&quot;: 47,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 13,
                                &quot;reserved&quot;: 5,
                                &quot;available&quot;: 8,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 48,
                            &quot;product_variant_id&quot;: 5,
                            &quot;size_option_id&quot;: 4,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 4,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;9 Yaş&quot;,
                                &quot;slug&quot;: &quot;9-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-9YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 48,
                                &quot;variant_size_id&quot;: 48,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 14,
                                &quot;reserved&quot;: 5,
                                &quot;available&quot;: 9,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 49,
                            &quot;product_variant_id&quot;: 5,
                            &quot;size_option_id&quot;: 5,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 5,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;10 Yaş&quot;,
                                &quot;slug&quot;: &quot;10-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-10YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 49,
                                &quot;variant_size_id&quot;: 49,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 10,
                                &quot;reserved&quot;: 3,
                                &quot;available&quot;: 7,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 50,
                            &quot;product_variant_id&quot;: 5,
                            &quot;size_option_id&quot;: 6,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 6,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;11 Yaş&quot;,
                                &quot;slug&quot;: &quot;11-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-11YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 50,
                                &quot;variant_size_id&quot;: 50,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 14,
                                &quot;reserved&quot;: 0,
                                &quot;available&quot;: 14,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 51,
                            &quot;product_variant_id&quot;: 5,
                            &quot;size_option_id&quot;: 7,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 7,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;12 Yaş&quot;,
                                &quot;slug&quot;: &quot;12-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-12YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 51,
                                &quot;variant_size_id&quot;: 51,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 17,
                                &quot;reserved&quot;: 4,
                                &quot;available&quot;: 13,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 52,
                            &quot;product_variant_id&quot;: 5,
                            &quot;size_option_id&quot;: 8,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 8,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;13 Yaş&quot;,
                                &quot;slug&quot;: &quot;13-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-13YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 52,
                                &quot;variant_size_id&quot;: 52,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 15,
                                &quot;reserved&quot;: 0,
                                &quot;available&quot;: 15,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 53,
                            &quot;product_variant_id&quot;: 5,
                            &quot;size_option_id&quot;: 9,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 9,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;14 Yaş&quot;,
                                &quot;slug&quot;: &quot;14-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-14YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 53,
                                &quot;variant_size_id&quot;: 53,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 31,
                                &quot;reserved&quot;: 1,
                                &quot;available&quot;: 30,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 54,
                            &quot;product_variant_id&quot;: 5,
                            &quot;size_option_id&quot;: 10,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 10,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;15 Yaş&quot;,
                                &quot;slug&quot;: &quot;15-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-15YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 54,
                                &quot;variant_size_id&quot;: 54,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 49,
                                &quot;reserved&quot;: 0,
                                &quot;available&quot;: 49,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 55,
                            &quot;product_variant_id&quot;: 5,
                            &quot;size_option_id&quot;: 11,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 11,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;16 Yaş&quot;,
                                &quot;slug&quot;: &quot;16-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-SYH-16YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 55,
                                &quot;variant_size_id&quot;: 55,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 20,
                                &quot;reserved&quot;: 0,
                                &quot;available&quot;: 20,
                                &quot;min_stock_level&quot;: 5
                            }
                        }
                    ]
                },
                {
                    &quot;id&quot;: 3,
                    &quot;sku&quot;: &quot;KI-2-ACIK0MAVI-3&quot;,
                    &quot;slug&quot;: &quot;kiz-cocuk-jean-pantolon-acik0mavi-3&quot;,
                    &quot;price_cents&quot;: 47900,
                    &quot;color_name&quot;: &quot;A&ccedil;ık Mavi&quot;,
                    &quot;color_code&quot;: &quot;#87CEEB&quot;,
                    &quot;is_popular&quot;: false,
                    &quot;is_active&quot;: true,
                    &quot;images&quot;: [
                        {
                            &quot;id&quot;: 6,
                            &quot;product_variant_id&quot;: 3,
                            &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/jean-acik-mavi.png&quot;,
                            &quot;is_primary&quot;: true,
                            &quot;sort_order&quot;: 1
                        }
                    ],
                    &quot;sizes&quot;: [
                        {
                            &quot;id&quot;: 23,
                            &quot;product_variant_id&quot;: 3,
                            &quot;size_option_id&quot;: 1,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 1,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;6 Yaş&quot;,
                                &quot;slug&quot;: &quot;6-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-6YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 23,
                                &quot;variant_size_id&quot;: 23,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 19,
                                &quot;reserved&quot;: 3,
                                &quot;available&quot;: 16,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 24,
                            &quot;product_variant_id&quot;: 3,
                            &quot;size_option_id&quot;: 2,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 2,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;7 Yaş&quot;,
                                &quot;slug&quot;: &quot;7-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-7YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 24,
                                &quot;variant_size_id&quot;: 24,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 41,
                                &quot;reserved&quot;: 2,
                                &quot;available&quot;: 39,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 25,
                            &quot;product_variant_id&quot;: 3,
                            &quot;size_option_id&quot;: 3,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 3,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;8 Yaş&quot;,
                                &quot;slug&quot;: &quot;8-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-8YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 25,
                                &quot;variant_size_id&quot;: 25,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 36,
                                &quot;reserved&quot;: 1,
                                &quot;available&quot;: 35,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 26,
                            &quot;product_variant_id&quot;: 3,
                            &quot;size_option_id&quot;: 4,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 4,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;9 Yaş&quot;,
                                &quot;slug&quot;: &quot;9-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-9YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 26,
                                &quot;variant_size_id&quot;: 26,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 44,
                                &quot;reserved&quot;: 1,
                                &quot;available&quot;: 43,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 27,
                            &quot;product_variant_id&quot;: 3,
                            &quot;size_option_id&quot;: 5,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 5,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;10 Yaş&quot;,
                                &quot;slug&quot;: &quot;10-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-10YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 27,
                                &quot;variant_size_id&quot;: 27,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 49,
                                &quot;reserved&quot;: 0,
                                &quot;available&quot;: 49,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 28,
                            &quot;product_variant_id&quot;: 3,
                            &quot;size_option_id&quot;: 6,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 6,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;11 Yaş&quot;,
                                &quot;slug&quot;: &quot;11-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-11YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 28,
                                &quot;variant_size_id&quot;: 28,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 31,
                                &quot;reserved&quot;: 3,
                                &quot;available&quot;: 28,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 29,
                            &quot;product_variant_id&quot;: 3,
                            &quot;size_option_id&quot;: 7,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 7,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;12 Yaş&quot;,
                                &quot;slug&quot;: &quot;12-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-12YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 29,
                                &quot;variant_size_id&quot;: 29,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 13,
                                &quot;reserved&quot;: 3,
                                &quot;available&quot;: 10,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 30,
                            &quot;product_variant_id&quot;: 3,
                            &quot;size_option_id&quot;: 8,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 8,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;13 Yaş&quot;,
                                &quot;slug&quot;: &quot;13-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-13YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 30,
                                &quot;variant_size_id&quot;: 30,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 10,
                                &quot;reserved&quot;: 2,
                                &quot;available&quot;: 8,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 31,
                            &quot;product_variant_id&quot;: 3,
                            &quot;size_option_id&quot;: 9,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 9,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;14 Yaş&quot;,
                                &quot;slug&quot;: &quot;14-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-14YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 31,
                                &quot;variant_size_id&quot;: 31,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 23,
                                &quot;reserved&quot;: 1,
                                &quot;available&quot;: 22,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 32,
                            &quot;product_variant_id&quot;: 3,
                            &quot;size_option_id&quot;: 10,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 10,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;15 Yaş&quot;,
                                &quot;slug&quot;: &quot;15-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-15YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 32,
                                &quot;variant_size_id&quot;: 32,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 44,
                                &quot;reserved&quot;: 4,
                                &quot;available&quot;: 40,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 33,
                            &quot;product_variant_id&quot;: 3,
                            &quot;size_option_id&quot;: 11,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 11,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;16 Yaş&quot;,
                                &quot;slug&quot;: &quot;16-yas&quot;
                            },
                            &quot;sku&quot;: &quot;JEAN-KIZ-001-AMAV-16YAS&quot;,
                            &quot;price_cents&quot;: 27900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 33,
                                &quot;variant_size_id&quot;: 33,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 21,
                                &quot;reserved&quot;: 1,
                                &quot;available&quot;: 20,
                                &quot;min_stock_level&quot;: 5
                            }
                        }
                    ]
                },
                {
                    &quot;id&quot;: 6,
                    &quot;sku&quot;: &quot;KI-2-SIYAH-6&quot;,
                    &quot;slug&quot;: &quot;kiz-cocuk-jean-pantolon-siyah-6&quot;,
                    &quot;price_cents&quot;: 1111,
                    &quot;color_name&quot;: &quot;Siyah&quot;,
                    &quot;color_code&quot;: &quot;#111111&quot;,
                    &quot;is_popular&quot;: true,
                    &quot;is_active&quot;: true,
                    &quot;images&quot;: [],
                    &quot;sizes&quot;: [
                        {
                            &quot;id&quot;: 56,
                            &quot;product_variant_id&quot;: 6,
                            &quot;size_option_id&quot;: 4,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 4,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;9 Yaş&quot;,
                                &quot;slug&quot;: &quot;9-yas&quot;
                            },
                            &quot;sku&quot;: &quot;KI-2-SIYAH-6-9-yas&quot;,
                            &quot;price_cents&quot;: 1111,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 56,
                                &quot;variant_size_id&quot;: 56,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 11,
                                &quot;reserved&quot;: 1,
                                &quot;available&quot;: 10,
                                &quot;min_stock_level&quot;: 10
                            }
                        }
                    ]
                }
            ],
            &quot;created_at&quot;: &quot;2026-05-15T19:37:44+00:00&quot;,
            &quot;updated_at&quot;: &quot;2026-05-23T19:07:54+00:00&quot;,
            &quot;category_title&quot;: &quot;Jean&quot;,
            &quot;gender&quot;: &quot;Erkek &Ccedil;ocuk&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;store_id&quot;: 1,
            &quot;title&quot;: &quot;Erkek &Ccedil;ocuk Eşofman Takımı&quot;,
            &quot;slug&quot;: &quot;erkek-cocuk-esofman-takimi&quot;,
            &quot;category&quot;: {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;Eşofman Takım&quot;,
                &quot;slug&quot;: &quot;unisex-esofman-takim&quot;,
                &quot;gender_id&quot;: 3,
                &quot;parent_id&quot;: 3,
                &quot;gender&quot;: {
                    &quot;id&quot;: 3,
                    &quot;title&quot;: &quot;Unisex&quot;,
                    &quot;slug&quot;: &quot;unisex&quot;
                },
                &quot;parent&quot;: {
                    &quot;id&quot;: 3,
                    &quot;title&quot;: &quot;Eşofman Takım&quot;,
                    &quot;slug&quot;: &quot;esofman-takim&quot;
                }
            },
            &quot;description&quot;: &quot;Kaliteli pamuklu erkek &ccedil;ocuk eşofman takımı&quot;,
            &quot;meta_title&quot;: null,
            &quot;meta_description&quot;: null,
            &quot;is_published&quot;: true,
            &quot;variants&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;sku&quot;: &quot;ESF-ERK-001-SYH&quot;,
                    &quot;slug&quot;: &quot;erkek-esofman-siyah&quot;,
                    &quot;price_cents&quot;: 34900,
                    &quot;color_name&quot;: &quot;Siyah&quot;,
                    &quot;color_code&quot;: &quot;#000000&quot;,
                    &quot;is_popular&quot;: false,
                    &quot;is_active&quot;: true,
                    &quot;images&quot;: [
                        {
                            &quot;id&quot;: 3,
                            &quot;product_variant_id&quot;: 2,
                            &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/esofman.png&quot;,
                            &quot;is_primary&quot;: true,
                            &quot;sort_order&quot;: 1
                        },
                        {
                            &quot;id&quot;: 4,
                            &quot;product_variant_id&quot;: 2,
                            &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/esofman1.png&quot;,
                            &quot;is_primary&quot;: false,
                            &quot;sort_order&quot;: 2
                        },
                        {
                            &quot;id&quot;: 5,
                            &quot;product_variant_id&quot;: 2,
                            &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/esofman2.png&quot;,
                            &quot;is_primary&quot;: false,
                            &quot;sort_order&quot;: 3
                        },
                        {
                            &quot;id&quot;: 11,
                            &quot;product_variant_id&quot;: 2,
                            &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/esofman.png&quot;,
                            &quot;is_primary&quot;: true,
                            &quot;sort_order&quot;: 1
                        },
                        {
                            &quot;id&quot;: 12,
                            &quot;product_variant_id&quot;: 2,
                            &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/esofman1.png&quot;,
                            &quot;is_primary&quot;: false,
                            &quot;sort_order&quot;: 2
                        },
                        {
                            &quot;id&quot;: 13,
                            &quot;product_variant_id&quot;: 2,
                            &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/esofman2.png&quot;,
                            &quot;is_primary&quot;: false,
                            &quot;sort_order&quot;: 3
                        }
                    ],
                    &quot;sizes&quot;: [
                        {
                            &quot;id&quot;: 12,
                            &quot;product_variant_id&quot;: 2,
                            &quot;size_option_id&quot;: 1,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 1,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;6 Yaş&quot;,
                                &quot;slug&quot;: &quot;6-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-SYH-6YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 12,
                                &quot;variant_size_id&quot;: 12,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 26,
                                &quot;reserved&quot;: 0,
                                &quot;available&quot;: 26,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 13,
                            &quot;product_variant_id&quot;: 2,
                            &quot;size_option_id&quot;: 2,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 2,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;7 Yaş&quot;,
                                &quot;slug&quot;: &quot;7-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-SYH-7YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 13,
                                &quot;variant_size_id&quot;: 13,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 0,
                                &quot;reserved&quot;: 0,
                                &quot;available&quot;: 0,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 14,
                            &quot;product_variant_id&quot;: 2,
                            &quot;size_option_id&quot;: 3,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 3,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;8 Yaş&quot;,
                                &quot;slug&quot;: &quot;8-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-SYH-8YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 14,
                                &quot;variant_size_id&quot;: 14,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 38,
                                &quot;reserved&quot;: 1,
                                &quot;available&quot;: 37,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 15,
                            &quot;product_variant_id&quot;: 2,
                            &quot;size_option_id&quot;: 4,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 4,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;9 Yaş&quot;,
                                &quot;slug&quot;: &quot;9-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-SYH-9YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 15,
                                &quot;variant_size_id&quot;: 15,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 27,
                                &quot;reserved&quot;: 5,
                                &quot;available&quot;: 22,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 16,
                            &quot;product_variant_id&quot;: 2,
                            &quot;size_option_id&quot;: 5,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 5,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;10 Yaş&quot;,
                                &quot;slug&quot;: &quot;10-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-SYH-10YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 16,
                                &quot;variant_size_id&quot;: 16,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 42,
                                &quot;reserved&quot;: 1,
                                &quot;available&quot;: 41,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 17,
                            &quot;product_variant_id&quot;: 2,
                            &quot;size_option_id&quot;: 6,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 6,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;11 Yaş&quot;,
                                &quot;slug&quot;: &quot;11-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-SYH-11YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 17,
                                &quot;variant_size_id&quot;: 17,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 45,
                                &quot;reserved&quot;: 2,
                                &quot;available&quot;: 43,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 18,
                            &quot;product_variant_id&quot;: 2,
                            &quot;size_option_id&quot;: 7,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 7,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;12 Yaş&quot;,
                                &quot;slug&quot;: &quot;12-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-SYH-12YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 18,
                                &quot;variant_size_id&quot;: 18,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 22,
                                &quot;reserved&quot;: 5,
                                &quot;available&quot;: 17,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 19,
                            &quot;product_variant_id&quot;: 2,
                            &quot;size_option_id&quot;: 8,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 8,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;13 Yaş&quot;,
                                &quot;slug&quot;: &quot;13-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-SYH-13YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 19,
                                &quot;variant_size_id&quot;: 19,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 33,
                                &quot;reserved&quot;: 1,
                                &quot;available&quot;: 32,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 20,
                            &quot;product_variant_id&quot;: 2,
                            &quot;size_option_id&quot;: 9,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 9,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;14 Yaş&quot;,
                                &quot;slug&quot;: &quot;14-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-SYH-14YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 20,
                                &quot;variant_size_id&quot;: 20,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 30,
                                &quot;reserved&quot;: 3,
                                &quot;available&quot;: 27,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 21,
                            &quot;product_variant_id&quot;: 2,
                            &quot;size_option_id&quot;: 10,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 10,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;15 Yaş&quot;,
                                &quot;slug&quot;: &quot;15-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-SYH-15YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 21,
                                &quot;variant_size_id&quot;: 21,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 46,
                                &quot;reserved&quot;: 0,
                                &quot;available&quot;: 46,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 22,
                            &quot;product_variant_id&quot;: 2,
                            &quot;size_option_id&quot;: 11,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 11,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;16 Yaş&quot;,
                                &quot;slug&quot;: &quot;16-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-SYH-16YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 22,
                                &quot;variant_size_id&quot;: 22,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 12,
                                &quot;reserved&quot;: 3,
                                &quot;available&quot;: 9,
                                &quot;min_stock_level&quot;: 5
                            }
                        }
                    ]
                },
                {
                    &quot;id&quot;: 1,
                    &quot;sku&quot;: &quot;ERK-1-MAVI-1&quot;,
                    &quot;slug&quot;: &quot;erkek-cocuk-esofman-takimi-mavi-1&quot;,
                    &quot;price_cents&quot;: 31900,
                    &quot;color_name&quot;: &quot;Mavi&quot;,
                    &quot;color_code&quot;: &quot;#0066CC&quot;,
                    &quot;is_popular&quot;: true,
                    &quot;is_active&quot;: true,
                    &quot;images&quot;: [
                        {
                            &quot;id&quot;: 14,
                            &quot;product_variant_id&quot;: 1,
                            &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/iKQdu6y7dAHTcCMhzZWpGRrbAKrBWpow1EEh5Awr.png&quot;,
                            &quot;is_primary&quot;: false,
                            &quot;sort_order&quot;: 0
                        },
                        {
                            &quot;id&quot;: 15,
                            &quot;product_variant_id&quot;: 1,
                            &quot;image&quot;: &quot;http://localhost:8000/storage/productImages/hUyP379CUhudAlUGOM5z5a8TFEPEko619YjMzj03.png&quot;,
                            &quot;is_primary&quot;: false,
                            &quot;sort_order&quot;: 0
                        }
                    ],
                    &quot;sizes&quot;: [
                        {
                            &quot;id&quot;: 1,
                            &quot;product_variant_id&quot;: 1,
                            &quot;size_option_id&quot;: 1,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 1,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;6 Yaş&quot;,
                                &quot;slug&quot;: &quot;6-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-MAV-6YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 1,
                                &quot;variant_size_id&quot;: 1,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 22,
                                &quot;reserved&quot;: 1,
                                &quot;available&quot;: 21,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 2,
                            &quot;product_variant_id&quot;: 1,
                            &quot;size_option_id&quot;: 2,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 2,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;7 Yaş&quot;,
                                &quot;slug&quot;: &quot;7-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-MAV-7YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 2,
                                &quot;variant_size_id&quot;: 2,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 17,
                                &quot;reserved&quot;: 2,
                                &quot;available&quot;: 15,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 3,
                            &quot;product_variant_id&quot;: 1,
                            &quot;size_option_id&quot;: 3,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 3,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;8 Yaş&quot;,
                                &quot;slug&quot;: &quot;8-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-MAV-8YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 3,
                                &quot;variant_size_id&quot;: 3,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 32,
                                &quot;reserved&quot;: 5,
                                &quot;available&quot;: 27,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 4,
                            &quot;product_variant_id&quot;: 1,
                            &quot;size_option_id&quot;: 4,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 4,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;9 Yaş&quot;,
                                &quot;slug&quot;: &quot;9-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-MAV-9YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 4,
                                &quot;variant_size_id&quot;: 4,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 16,
                                &quot;reserved&quot;: 4,
                                &quot;available&quot;: 12,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 5,
                            &quot;product_variant_id&quot;: 1,
                            &quot;size_option_id&quot;: 5,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 5,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;10 Yaş&quot;,
                                &quot;slug&quot;: &quot;10-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-MAV-10YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 5,
                                &quot;variant_size_id&quot;: 5,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 29,
                                &quot;reserved&quot;: 3,
                                &quot;available&quot;: 26,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 6,
                            &quot;product_variant_id&quot;: 1,
                            &quot;size_option_id&quot;: 6,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 6,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;11 Yaş&quot;,
                                &quot;slug&quot;: &quot;11-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-MAV-11YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 6,
                                &quot;variant_size_id&quot;: 6,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 27,
                                &quot;reserved&quot;: 3,
                                &quot;available&quot;: 24,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 7,
                            &quot;product_variant_id&quot;: 1,
                            &quot;size_option_id&quot;: 7,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 7,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;12 Yaş&quot;,
                                &quot;slug&quot;: &quot;12-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-MAV-12YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 7,
                                &quot;variant_size_id&quot;: 7,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 29,
                                &quot;reserved&quot;: 2,
                                &quot;available&quot;: 27,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 8,
                            &quot;product_variant_id&quot;: 1,
                            &quot;size_option_id&quot;: 8,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 8,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;13 Yaş&quot;,
                                &quot;slug&quot;: &quot;13-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-MAV-13YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 8,
                                &quot;variant_size_id&quot;: 8,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 22,
                                &quot;reserved&quot;: 4,
                                &quot;available&quot;: 18,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 9,
                            &quot;product_variant_id&quot;: 1,
                            &quot;size_option_id&quot;: 9,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 9,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;14 Yaş&quot;,
                                &quot;slug&quot;: &quot;14-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-MAV-14YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 9,
                                &quot;variant_size_id&quot;: 9,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 27,
                                &quot;reserved&quot;: 2,
                                &quot;available&quot;: 25,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 10,
                            &quot;product_variant_id&quot;: 1,
                            &quot;size_option_id&quot;: 10,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 10,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;15 Yaş&quot;,
                                &quot;slug&quot;: &quot;15-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-MAV-15YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 10,
                                &quot;variant_size_id&quot;: 10,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 25,
                                &quot;reserved&quot;: 3,
                                &quot;available&quot;: 22,
                                &quot;min_stock_level&quot;: 5
                            }
                        },
                        {
                            &quot;id&quot;: 11,
                            &quot;product_variant_id&quot;: 1,
                            &quot;size_option_id&quot;: 11,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 11,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;16 Yaş&quot;,
                                &quot;slug&quot;: &quot;16-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ESF-ERK-001-MAV-16YAS&quot;,
                            &quot;price_cents&quot;: 34900,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 11,
                                &quot;variant_size_id&quot;: 11,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 13,
                                &quot;reserved&quot;: 5,
                                &quot;available&quot;: 8,
                                &quot;min_stock_level&quot;: 5
                            }
                        }
                    ]
                },
                {
                    &quot;id&quot;: 7,
                    &quot;sku&quot;: &quot;ERK-1-MAVI-7&quot;,
                    &quot;slug&quot;: &quot;erkek-cocuk-esofman-takimi-mavi-7&quot;,
                    &quot;price_cents&quot;: 11111,
                    &quot;color_name&quot;: &quot;Mavi&quot;,
                    &quot;color_code&quot;: &quot;#000000&quot;,
                    &quot;is_popular&quot;: false,
                    &quot;is_active&quot;: true,
                    &quot;images&quot;: [],
                    &quot;sizes&quot;: [
                        {
                            &quot;id&quot;: 57,
                            &quot;product_variant_id&quot;: 7,
                            &quot;size_option_id&quot;: 5,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 5,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;10 Yaş&quot;,
                                &quot;slug&quot;: &quot;10-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ERK-1-MAVI-7-10-yas&quot;,
                            &quot;price_cents&quot;: 11111,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 57,
                                &quot;variant_size_id&quot;: 57,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 11,
                                &quot;reserved&quot;: 0,
                                &quot;available&quot;: 11,
                                &quot;min_stock_level&quot;: 0
                            }
                        }
                    ]
                },
                {
                    &quot;id&quot;: 8,
                    &quot;sku&quot;: &quot;ERK-1-YESIL-8&quot;,
                    &quot;slug&quot;: &quot;erkek-cocuk-esofman-takimi-yesil-8&quot;,
                    &quot;price_cents&quot;: 1111,
                    &quot;color_name&quot;: &quot;Yeşil&quot;,
                    &quot;color_code&quot;: &quot;#000000&quot;,
                    &quot;is_popular&quot;: false,
                    &quot;is_active&quot;: true,
                    &quot;images&quot;: [],
                    &quot;sizes&quot;: [
                        {
                            &quot;id&quot;: 58,
                            &quot;product_variant_id&quot;: 8,
                            &quot;size_option_id&quot;: 4,
                            &quot;size_option&quot;: {
                                &quot;id&quot;: 4,
                                &quot;attribute_id&quot;: 1,
                                &quot;value&quot;: &quot;9 Yaş&quot;,
                                &quot;slug&quot;: &quot;9-yas&quot;
                            },
                            &quot;sku&quot;: &quot;ERK-1-YESIL-8-9-yas&quot;,
                            &quot;price_cents&quot;: 1111,
                            &quot;is_active&quot;: true,
                            &quot;inventory&quot;: {
                                &quot;id&quot;: 58,
                                &quot;variant_size_id&quot;: 58,
                                &quot;warehouse_id&quot;: 1,
                                &quot;on_hand&quot;: 11,
                                &quot;reserved&quot;: 0,
                                &quot;available&quot;: 11,
                                &quot;min_stock_level&quot;: 0
                            }
                        }
                    ]
                }
            ],
            &quot;created_at&quot;: &quot;2026-05-15T19:37:44+00:00&quot;,
            &quot;updated_at&quot;: &quot;2026-05-24T15:21:59+00:00&quot;,
            &quot;category_title&quot;: &quot;Eşofman Takım&quot;,
            &quot;gender&quot;: &quot;Unisex&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-search" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-search"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-search"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-search">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-search" data-method="GET"
      data-path="api/search"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-search', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-search"
                    onclick="tryItOut('GETapi-search');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-search"
                    onclick="cancelTryOut('GETapi-search');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-search"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/search</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-filter">GET api/filter</h2>

<p>
</p>



<span id="example-requests-GETapi-filter">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/filter" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/filter"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-filter">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Filtre Sonucu&quot;,
    &quot;data&quot;: {
        &quot;total&quot;: 2,
        &quot;page&quot;: 1,
        &quot;size&quot;: 12,
        &quot;filters&quot;: [],
        &quot;products&quot;: []
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-filter" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-filter"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-filter"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-filter" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-filter">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-filter" data-method="GET"
      data-path="api/filter"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-filter', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-filter"
                    onclick="tryItOut('GETapi-filter');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-filter"
                    onclick="cancelTryOut('GETapi-filter');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-filter"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/filter</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-filter"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-filter"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-iyzico-callback">POST api/iyzico-callback</h2>

<p>
</p>



<span id="example-requests-POSTapi-iyzico-callback">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/iyzico-callback" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/iyzico-callback"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-iyzico-callback">
</span>
<span id="execution-results-POSTapi-iyzico-callback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-iyzico-callback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-iyzico-callback"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-iyzico-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-iyzico-callback">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-iyzico-callback" data-method="POST"
      data-path="api/iyzico-callback"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-iyzico-callback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-iyzico-callback"
                    onclick="tryItOut('POSTapi-iyzico-callback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-iyzico-callback"
                    onclick="cancelTryOut('POSTapi-iyzico-callback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-iyzico-callback"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/iyzico-callback</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-iyzico-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-iyzico-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-checkout-confirm">POST api/checkout/confirm</h2>

<p>
</p>



<span id="example-requests-POSTapi-checkout-confirm">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/checkout/confirm" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/checkout/confirm"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-checkout-confirm">
</span>
<span id="execution-results-POSTapi-checkout-confirm" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-checkout-confirm"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-checkout-confirm"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-checkout-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-checkout-confirm">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-checkout-confirm" data-method="POST"
      data-path="api/checkout/confirm"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-checkout-confirm', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-checkout-confirm"
                    onclick="tryItOut('POSTapi-checkout-confirm');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-checkout-confirm"
                    onclick="cancelTryOut('POSTapi-checkout-confirm');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-checkout-confirm"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/checkout/confirm</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-checkout-confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-checkout-confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-bags-campaign">POST api/bags/campaign</h2>

<p>
</p>



<span id="example-requests-POSTapi-bags-campaign">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/bags/campaign" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"campaign_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/bags/campaign"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "campaign_id": 17
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-bags-campaign">
</span>
<span id="execution-results-POSTapi-bags-campaign" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-bags-campaign"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-bags-campaign"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-bags-campaign" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-bags-campaign">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-bags-campaign" data-method="POST"
      data-path="api/bags/campaign"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-bags-campaign', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-bags-campaign"
                    onclick="tryItOut('POSTapi-bags-campaign');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-bags-campaign"
                    onclick="cancelTryOut('POSTapi-bags-campaign');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-bags-campaign"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/bags/campaign</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-bags-campaign"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-bags-campaign"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>campaign_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="campaign_id"                data-endpoint="POSTapi-bags-campaign"
               value="17"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the campaigns table. Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-bags-campaign">DELETE api/bags/campaign</h2>

<p>
</p>



<span id="example-requests-DELETEapi-bags-campaign">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/bags/campaign" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/bags/campaign"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-bags-campaign">
</span>
<span id="execution-results-DELETEapi-bags-campaign" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-bags-campaign"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-bags-campaign"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-bags-campaign" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-bags-campaign">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-bags-campaign" data-method="DELETE"
      data-path="api/bags/campaign"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-bags-campaign', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-bags-campaign"
                    onclick="tryItOut('DELETEapi-bags-campaign');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-bags-campaign"
                    onclick="cancelTryOut('DELETEapi-bags-campaign');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-bags-campaign"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/bags/campaign</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-bags-campaign"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-bags-campaign"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-bags">GET api/bags</h2>

<p>
</p>



<span id="example-requests-GETapi-bags">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/bags" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/bags"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-bags">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-bags" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-bags"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bags"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-bags" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bags">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-bags" data-method="GET"
      data-path="api/bags"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-bags', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-bags"
                    onclick="tryItOut('GETapi-bags');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-bags"
                    onclick="cancelTryOut('GETapi-bags');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-bags"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/bags</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-bags"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-bags"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-bags">POST api/bags</h2>

<p>
</p>



<span id="example-requests-POSTapi-bags">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/bags" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"variant_size_id\": 17,
    \"quantity\": 45
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/bags"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "variant_size_id": 17,
    "quantity": 45
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-bags">
</span>
<span id="execution-results-POSTapi-bags" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-bags"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-bags"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-bags" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-bags">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-bags" data-method="POST"
      data-path="api/bags"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-bags', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-bags"
                    onclick="tryItOut('POSTapi-bags');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-bags"
                    onclick="cancelTryOut('POSTapi-bags');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-bags"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/bags</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-bags"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-bags"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>variant_size_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="variant_size_id"                data-endpoint="POSTapi-bags"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quantity"                data-endpoint="POSTapi-bags"
               value="45"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>45</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-bags--id-">GET api/bags/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-bags--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/bags/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/bags/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-bags--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-bags--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-bags--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bags--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-bags--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bags--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-bags--id-" data-method="GET"
      data-path="api/bags/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-bags--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-bags--id-"
                    onclick="tryItOut('GETapi-bags--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-bags--id-"
                    onclick="cancelTryOut('GETapi-bags--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-bags--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/bags/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-bags--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-bags--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-bags--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the bag. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-bags--id-">PUT api/bags/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-bags--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/bags/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/bags/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-bags--id-">
</span>
<span id="execution-results-PUTapi-bags--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-bags--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-bags--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-bags--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-bags--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-bags--id-" data-method="PUT"
      data-path="api/bags/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-bags--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-bags--id-"
                    onclick="tryItOut('PUTapi-bags--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-bags--id-"
                    onclick="cancelTryOut('PUTapi-bags--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-bags--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/bags/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/bags/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-bags--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-bags--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-bags--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the bag. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-bags--id-">DELETE api/bags/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-bags--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/bags/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/bags/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-bags--id-">
</span>
<span id="execution-results-DELETEapi-bags--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-bags--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-bags--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-bags--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-bags--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-bags--id-" data-method="DELETE"
      data-path="api/bags/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-bags--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-bags--id-"
                    onclick="tryItOut('DELETEapi-bags--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-bags--id-"
                    onclick="cancelTryOut('DELETEapi-bags--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-bags--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/bags/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-bags--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-bags--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-bags--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the bag. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-checkout-session--session_id-">GET api/checkout/session/{session_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-checkout-session--session_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/checkout/session/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/checkout/session/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-checkout-session--session_id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-checkout-session--session_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-checkout-session--session_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-checkout-session--session_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-checkout-session--session_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-checkout-session--session_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-checkout-session--session_id-" data-method="GET"
      data-path="api/checkout/session/{session_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-checkout-session--session_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-checkout-session--session_id-"
                    onclick="tryItOut('GETapi-checkout-session--session_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-checkout-session--session_id-"
                    onclick="cancelTryOut('GETapi-checkout-session--session_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-checkout-session--session_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/checkout/session/{session_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-checkout-session--session_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-checkout-session--session_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>session_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="session_id"                data-endpoint="GETapi-checkout-session--session_id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the session. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-checkout-session">POST api/checkout/session</h2>

<p>
</p>



<span id="example-requests-POSTapi-checkout-session">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/checkout/session" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/checkout/session"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-checkout-session">
</span>
<span id="execution-results-POSTapi-checkout-session" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-checkout-session"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-checkout-session"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-checkout-session" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-checkout-session">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-checkout-session" data-method="POST"
      data-path="api/checkout/session"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-checkout-session', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-checkout-session"
                    onclick="tryItOut('POSTapi-checkout-session');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-checkout-session"
                    onclick="cancelTryOut('POSTapi-checkout-session');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-checkout-session"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/checkout/session</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-checkout-session"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-checkout-session"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-checkout-shipping">POST api/checkout/shipping</h2>

<p>
</p>



<span id="example-requests-POSTapi-checkout-shipping">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/checkout/shipping" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"session_id\": \"66529e01-d113-3473-8d6f-9e11e09332ea\",
    \"shipping_address_id\": \"consequatur\",
    \"delivery_method\": \"mqeopfuudtdsufvyvddqa\",
    \"notes\": \"mniihfqcoynlazghdtqtq\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/checkout/shipping"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "session_id": "66529e01-d113-3473-8d6f-9e11e09332ea",
    "shipping_address_id": "consequatur",
    "delivery_method": "mqeopfuudtdsufvyvddqa",
    "notes": "mniihfqcoynlazghdtqtq"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-checkout-shipping">
</span>
<span id="execution-results-POSTapi-checkout-shipping" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-checkout-shipping"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-checkout-shipping"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-checkout-shipping" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-checkout-shipping">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-checkout-shipping" data-method="POST"
      data-path="api/checkout/shipping"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-checkout-shipping', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-checkout-shipping"
                    onclick="tryItOut('POSTapi-checkout-shipping');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-checkout-shipping"
                    onclick="cancelTryOut('POSTapi-checkout-shipping');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-checkout-shipping"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/checkout/shipping</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-checkout-shipping"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-checkout-shipping"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>session_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="session_id"                data-endpoint="POSTapi-checkout-shipping"
               value="66529e01-d113-3473-8d6f-9e11e09332ea"
               data-component="body">
    <br>
<p>Must be a valid UUID. Example: <code>66529e01-d113-3473-8d6f-9e11e09332ea</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shipping_address_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="shipping_address_id"                data-endpoint="POSTapi-checkout-shipping"
               value="consequatur"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the user_addresses table. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>billing_address_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="billing_address_id"                data-endpoint="POSTapi-checkout-shipping"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the user_addresses table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>delivery_method</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="delivery_method"                data-endpoint="POSTapi-checkout-shipping"
               value="mqeopfuudtdsufvyvddqa"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>mqeopfuudtdsufvyvddqa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-checkout-shipping"
               value="mniihfqcoynlazghdtqtq"
               data-component="body">
    <br>
<p>Must not be greater than 500 characters. Example: <code>mniihfqcoynlazghdtqtq</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-checkout-payment-intent">POST api/checkout/payment-intent</h2>

<p>
</p>



<span id="example-requests-POSTapi-checkout-payment-intent">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/checkout/payment-intent" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"session_id\": \"66529e01-d113-3473-8d6f-9e11e09332ea\",
    \"payment_method\": \"saved_card\",
    \"payment_method_id\": 17,
    \"provider\": \"iyzico\",
    \"card_alias\": \"mqeopfuudtdsufvyvddqa\",
    \"card_number\": \"497663666622108766\",
    \"card_holder_name\": \"eopfuudtdsufvyvddqamn\",
    \"expire_month\": \"81\",
    \"expire_year\": \"8107\",
    \"cvv\": \"4976\",
    \"save_card\": false,
    \"installment\": 8,
    \"requires_3ds\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/checkout/payment-intent"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "session_id": "66529e01-d113-3473-8d6f-9e11e09332ea",
    "payment_method": "saved_card",
    "payment_method_id": 17,
    "provider": "iyzico",
    "card_alias": "mqeopfuudtdsufvyvddqa",
    "card_number": "497663666622108766",
    "card_holder_name": "eopfuudtdsufvyvddqamn",
    "expire_month": "81",
    "expire_year": "8107",
    "cvv": "4976",
    "save_card": false,
    "installment": 8,
    "requires_3ds": true
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-checkout-payment-intent">
</span>
<span id="execution-results-POSTapi-checkout-payment-intent" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-checkout-payment-intent"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-checkout-payment-intent"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-checkout-payment-intent" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-checkout-payment-intent">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-checkout-payment-intent" data-method="POST"
      data-path="api/checkout/payment-intent"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-checkout-payment-intent', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-checkout-payment-intent"
                    onclick="tryItOut('POSTapi-checkout-payment-intent');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-checkout-payment-intent"
                    onclick="cancelTryOut('POSTapi-checkout-payment-intent');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-checkout-payment-intent"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/checkout/payment-intent</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-checkout-payment-intent"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-checkout-payment-intent"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>session_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="session_id"                data-endpoint="POSTapi-checkout-payment-intent"
               value="66529e01-d113-3473-8d6f-9e11e09332ea"
               data-component="body">
    <br>
<p>Must be a valid UUID. Example: <code>66529e01-d113-3473-8d6f-9e11e09332ea</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payment_method</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="payment_method"                data-endpoint="POSTapi-checkout-payment-intent"
               value="saved_card"
               data-component="body">
    <br>
<p>Example: <code>saved_card</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>saved_card</code></li> <li><code>new_card</code></li> <li><code>cash_on_delivery</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payment_method_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="payment_method_id"                data-endpoint="POSTapi-checkout-payment-intent"
               value="17"
               data-component="body">
    <br>
<p>This field is required when <code>payment_method</code> is <code>saved_card</code>. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>provider</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="provider"                data-endpoint="POSTapi-checkout-payment-intent"
               value="iyzico"
               data-component="body">
    <br>
<p>This field is required when <code>payment_method</code> is <code>new_card</code>. Example: <code>iyzico</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>iyzico</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>card_alias</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="card_alias"                data-endpoint="POSTapi-checkout-payment-intent"
               value="mqeopfuudtdsufvyvddqa"
               data-component="body">
    <br>
<p>Must not be greater than 191 characters. Example: <code>mqeopfuudtdsufvyvddqa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>card_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="card_number"                data-endpoint="POSTapi-checkout-payment-intent"
               value="497663666622108766"
               data-component="body">
    <br>
<p>This field is required when <code>payment_method</code> is <code>new_card</code>. Must be between 12 and 19 digits. Example: <code>497663666622108766</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>card_holder_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="card_holder_name"                data-endpoint="POSTapi-checkout-payment-intent"
               value="eopfuudtdsufvyvddqamn"
               data-component="body">
    <br>
<p>This field is required when <code>payment_method</code> is <code>new_card</code>. Must not be greater than 191 characters. Example: <code>eopfuudtdsufvyvddqamn</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>expire_month</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="expire_month"                data-endpoint="POSTapi-checkout-payment-intent"
               value="81"
               data-component="body">
    <br>
<p>This field is required when <code>payment_method</code> is <code>new_card</code>. Must be 2 digits. Example: <code>81</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>expire_year</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="expire_year"                data-endpoint="POSTapi-checkout-payment-intent"
               value="8107"
               data-component="body">
    <br>
<p>This field is required when <code>payment_method</code> is <code>new_card</code>. Must be 4 digits. Example: <code>8107</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cvv</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cvv"                data-endpoint="POSTapi-checkout-payment-intent"
               value="4976"
               data-component="body">
    <br>
<p>This field is required when <code>payment_method</code> is <code>new_card</code>. Must be between 3 and 4 digits. Example: <code>4976</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>save_card</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-checkout-payment-intent" style="display: none">
            <input type="radio" name="save_card"
                   value="true"
                   data-endpoint="POSTapi-checkout-payment-intent"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-checkout-payment-intent" style="display: none">
            <input type="radio" name="save_card"
                   value="false"
                   data-endpoint="POSTapi-checkout-payment-intent"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>This field is required when <code>payment_method</code> is <code>new_card</code>. Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>installment</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="installment"                data-endpoint="POSTapi-checkout-payment-intent"
               value="8"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 12. Example: <code>8</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>requires_3ds</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-checkout-payment-intent" style="display: none">
            <input type="radio" name="requires_3ds"
                   value="true"
                   data-endpoint="POSTapi-checkout-payment-intent"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-checkout-payment-intent" style="display: none">
            <input type="radio" name="requires_3ds"
                   value="false"
                   data-endpoint="POSTapi-checkout-payment-intent"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-orders">GET api/orders</h2>

<p>
</p>



<span id="example-requests-GETapi-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/orders" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/orders"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-orders">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-orders" data-method="GET"
      data-path="api/orders"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-orders"
                    onclick="tryItOut('GETapi-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-orders"
                    onclick="cancelTryOut('GETapi-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-orders--order-">GET api/orders/{order}</h2>

<p>
</p>



<span id="example-requests-GETapi-orders--order-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/orders/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/orders/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-orders--order-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-orders--order-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-orders--order-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders--order-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-orders--order-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders--order-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-orders--order-" data-method="GET"
      data-path="api/orders/{order}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-orders--order-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-orders--order-"
                    onclick="tryItOut('GETapi-orders--order-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-orders--order-"
                    onclick="cancelTryOut('GETapi-orders--order-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-orders--order-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/orders/{order}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-orders--order-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-orders--order-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="order"                data-endpoint="GETapi-orders--order-"
               value="consequatur"
               data-component="url">
    <br>
<p>The order. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-me">GET api/me</h2>

<p>
</p>



<span id="example-requests-GETapi-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/me" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/me"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-me">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-me"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-me">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-me" data-method="GET"
      data-path="api/me"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-me"
                    onclick="tryItOut('GETapi-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-me"
                    onclick="cancelTryOut('GETapi-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-me"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/me</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-account-addresses">GET api/account/addresses</h2>

<p>
</p>



<span id="example-requests-GETapi-account-addresses">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/account/addresses" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/account/addresses"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-account-addresses">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-account-addresses" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-account-addresses"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-account-addresses"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-account-addresses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-account-addresses">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-account-addresses" data-method="GET"
      data-path="api/account/addresses"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-account-addresses', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-account-addresses"
                    onclick="tryItOut('GETapi-account-addresses');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-account-addresses"
                    onclick="cancelTryOut('GETapi-account-addresses');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-account-addresses"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/account/addresses</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-account-addresses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-account-addresses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-account-addresses">POST api/account/addresses</h2>

<p>
</p>



<span id="example-requests-POSTapi-account-addresses">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/account/addresses" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"vmqeopfuudtdsufvyvddq\",
    \"first_name\": \"amniihfqcoynlazghdtqt\",
    \"last_name\": \"qxbajwbpilpmufinllwlo\",
    \"phone\": \"auydlsmsjuryvojcybzvr\",
    \"address_line_1\": \"byickznkygloigmkwxphl\",
    \"address_line_2\": \"vazjrcnfbaqywuxhgjjmz\",
    \"district\": \"uxjubqouzswiwxtrkimfc\",
    \"city\": \"atbxspzmrazsroyjpxmqe\",
    \"postal_code\": \"sedyghenqcopwvownkbam\",
    \"country\": \"lnfngefbeilfzsyuxoezb\",
    \"is_default\": true,
    \"is_active\": true,
    \"notes\": \"dtabptcyyerevrljcbwkt\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/account/addresses"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "vmqeopfuudtdsufvyvddq",
    "first_name": "amniihfqcoynlazghdtqt",
    "last_name": "qxbajwbpilpmufinllwlo",
    "phone": "auydlsmsjuryvojcybzvr",
    "address_line_1": "byickznkygloigmkwxphl",
    "address_line_2": "vazjrcnfbaqywuxhgjjmz",
    "district": "uxjubqouzswiwxtrkimfc",
    "city": "atbxspzmrazsroyjpxmqe",
    "postal_code": "sedyghenqcopwvownkbam",
    "country": "lnfngefbeilfzsyuxoezb",
    "is_default": true,
    "is_active": true,
    "notes": "dtabptcyyerevrljcbwkt"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-account-addresses">
</span>
<span id="execution-results-POSTapi-account-addresses" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-account-addresses"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-account-addresses"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-account-addresses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-account-addresses">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-account-addresses" data-method="POST"
      data-path="api/account/addresses"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-account-addresses', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-account-addresses"
                    onclick="tryItOut('POSTapi-account-addresses');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-account-addresses"
                    onclick="cancelTryOut('POSTapi-account-addresses');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-account-addresses"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/account/addresses</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-account-addresses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-account-addresses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-account-addresses"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="POSTapi-account-addresses"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="POSTapi-account-addresses"
               value="qxbajwbpilpmufinllwlo"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>qxbajwbpilpmufinllwlo</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-account-addresses"
               value="auydlsmsjuryvojcybzvr"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>auydlsmsjuryvojcybzvr</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address_line_1</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address_line_1"                data-endpoint="POSTapi-account-addresses"
               value="byickznkygloigmkwxphl"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>byickznkygloigmkwxphl</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address_line_2</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address_line_2"                data-endpoint="POSTapi-account-addresses"
               value="vazjrcnfbaqywuxhgjjmz"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vazjrcnfbaqywuxhgjjmz</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>district</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="district"                data-endpoint="POSTapi-account-addresses"
               value="uxjubqouzswiwxtrkimfc"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>uxjubqouzswiwxtrkimfc</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="POSTapi-account-addresses"
               value="atbxspzmrazsroyjpxmqe"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>atbxspzmrazsroyjpxmqe</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>postal_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="postal_code"                data-endpoint="POSTapi-account-addresses"
               value="sedyghenqcopwvownkbam"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>sedyghenqcopwvownkbam</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country"                data-endpoint="POSTapi-account-addresses"
               value="lnfngefbeilfzsyuxoezb"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>lnfngefbeilfzsyuxoezb</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_default</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-account-addresses" style="display: none">
            <input type="radio" name="is_default"
                   value="true"
                   data-endpoint="POSTapi-account-addresses"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-account-addresses" style="display: none">
            <input type="radio" name="is_default"
                   value="false"
                   data-endpoint="POSTapi-account-addresses"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-account-addresses" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="POSTapi-account-addresses"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-account-addresses" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="POSTapi-account-addresses"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-account-addresses"
               value="dtabptcyyerevrljcbwkt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>dtabptcyyerevrljcbwkt</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-account-addresses--id-">GET api/account/addresses/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-account-addresses--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/account/addresses/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/account/addresses/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-account-addresses--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-account-addresses--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-account-addresses--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-account-addresses--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-account-addresses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-account-addresses--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-account-addresses--id-" data-method="GET"
      data-path="api/account/addresses/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-account-addresses--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-account-addresses--id-"
                    onclick="tryItOut('GETapi-account-addresses--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-account-addresses--id-"
                    onclick="cancelTryOut('GETapi-account-addresses--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-account-addresses--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/account/addresses/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-account-addresses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-account-addresses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-account-addresses--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the address. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-account-addresses--id-">PUT api/account/addresses/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-account-addresses--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/account/addresses/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"vmqeopfuudtdsufvyvddq\",
    \"first_name\": \"amniihfqcoynlazghdtqt\",
    \"last_name\": \"qxbajwbpilpmufinllwlo\",
    \"phone\": \"auydlsmsjuryvojcybzvr\",
    \"address_line_1\": \"byickznkygloigmkwxphl\",
    \"address_line_2\": \"vazjrcnfbaqywuxhgjjmz\",
    \"district\": \"uxjubqouzswiwxtrkimfc\",
    \"city\": \"atbxspzmrazsroyjpxmqe\",
    \"postal_code\": \"sedyghenqcopwvownkbam\",
    \"country\": \"lnfngefbeilfzsyuxoezb\",
    \"is_default\": false,
    \"is_active\": true,
    \"notes\": \"dtabptcyyerevrljcbwkt\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/account/addresses/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "vmqeopfuudtdsufvyvddq",
    "first_name": "amniihfqcoynlazghdtqt",
    "last_name": "qxbajwbpilpmufinllwlo",
    "phone": "auydlsmsjuryvojcybzvr",
    "address_line_1": "byickznkygloigmkwxphl",
    "address_line_2": "vazjrcnfbaqywuxhgjjmz",
    "district": "uxjubqouzswiwxtrkimfc",
    "city": "atbxspzmrazsroyjpxmqe",
    "postal_code": "sedyghenqcopwvownkbam",
    "country": "lnfngefbeilfzsyuxoezb",
    "is_default": false,
    "is_active": true,
    "notes": "dtabptcyyerevrljcbwkt"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-account-addresses--id-">
</span>
<span id="execution-results-PUTapi-account-addresses--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-account-addresses--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-account-addresses--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-account-addresses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-account-addresses--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-account-addresses--id-" data-method="PUT"
      data-path="api/account/addresses/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-account-addresses--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-account-addresses--id-"
                    onclick="tryItOut('PUTapi-account-addresses--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-account-addresses--id-"
                    onclick="cancelTryOut('PUTapi-account-addresses--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-account-addresses--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/account/addresses/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/account/addresses/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-account-addresses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-account-addresses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-account-addresses--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the address. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-account-addresses--id-"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="PUTapi-account-addresses--id-"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="PUTapi-account-addresses--id-"
               value="qxbajwbpilpmufinllwlo"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>qxbajwbpilpmufinllwlo</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PUTapi-account-addresses--id-"
               value="auydlsmsjuryvojcybzvr"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>auydlsmsjuryvojcybzvr</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address_line_1</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address_line_1"                data-endpoint="PUTapi-account-addresses--id-"
               value="byickznkygloigmkwxphl"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>byickznkygloigmkwxphl</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address_line_2</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address_line_2"                data-endpoint="PUTapi-account-addresses--id-"
               value="vazjrcnfbaqywuxhgjjmz"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vazjrcnfbaqywuxhgjjmz</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>district</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="district"                data-endpoint="PUTapi-account-addresses--id-"
               value="uxjubqouzswiwxtrkimfc"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>uxjubqouzswiwxtrkimfc</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="PUTapi-account-addresses--id-"
               value="atbxspzmrazsroyjpxmqe"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>atbxspzmrazsroyjpxmqe</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>postal_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="postal_code"                data-endpoint="PUTapi-account-addresses--id-"
               value="sedyghenqcopwvownkbam"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>sedyghenqcopwvownkbam</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="country"                data-endpoint="PUTapi-account-addresses--id-"
               value="lnfngefbeilfzsyuxoezb"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>lnfngefbeilfzsyuxoezb</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_default</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-account-addresses--id-" style="display: none">
            <input type="radio" name="is_default"
                   value="true"
                   data-endpoint="PUTapi-account-addresses--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-account-addresses--id-" style="display: none">
            <input type="radio" name="is_default"
                   value="false"
                   data-endpoint="PUTapi-account-addresses--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-account-addresses--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="PUTapi-account-addresses--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-account-addresses--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="PUTapi-account-addresses--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="PUTapi-account-addresses--id-"
               value="dtabptcyyerevrljcbwkt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>dtabptcyyerevrljcbwkt</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-account-addresses--id-">DELETE api/account/addresses/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-account-addresses--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/account/addresses/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/account/addresses/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-account-addresses--id-">
</span>
<span id="execution-results-DELETEapi-account-addresses--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-account-addresses--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-account-addresses--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-account-addresses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-account-addresses--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-account-addresses--id-" data-method="DELETE"
      data-path="api/account/addresses/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-account-addresses--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-account-addresses--id-"
                    onclick="tryItOut('DELETEapi-account-addresses--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-account-addresses--id-"
                    onclick="cancelTryOut('DELETEapi-account-addresses--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-account-addresses--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/account/addresses/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-account-addresses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-account-addresses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-account-addresses--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the address. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-account-profile">PUT api/account/profile</h2>

<p>
</p>



<span id="example-requests-PUTapi-account-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/account/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"first_name\": \"vmqeopfuudtdsufvyvddq\",
    \"last_name\": \"amniihfqcoynlazghdtqt\",
    \"phone\": \"qxbajwbpilpmufinl\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/account/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "vmqeopfuudtdsufvyvddq",
    "last_name": "amniihfqcoynlazghdtqt",
    "phone": "qxbajwbpilpmufinl"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-account-profile">
</span>
<span id="execution-results-PUTapi-account-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-account-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-account-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-account-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-account-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-account-profile" data-method="PUT"
      data-path="api/account/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-account-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-account-profile"
                    onclick="tryItOut('PUTapi-account-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-account-profile"
                    onclick="cancelTryOut('PUTapi-account-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-account-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/account/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-account-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-account-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="PUTapi-account-profile"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must be at least 3 characters. Must not be greater than 100 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="PUTapi-account-profile"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must be at least 3 characters. Must not be greater than 100 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PUTapi-account-profile"
               value="qxbajwbpilpmufinl"
               data-component="body">
    <br>
<p>Must match the regex /^[0-9+-\s()]+$/. Must not be greater than 20 characters. Example: <code>qxbajwbpilpmufinl</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-logout">POST api/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-logout">
</span>
<span id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-logout" data-method="POST"
      data-path="api/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-logout"
                    onclick="tryItOut('POSTapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-logout"
                    onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-seller-logout">POST api/seller-logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-seller-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/seller-logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller-logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-seller-logout">
</span>
<span id="execution-results-POSTapi-seller-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-seller-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-seller-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-seller-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-seller-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-seller-logout" data-method="POST"
      data-path="api/seller-logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-seller-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-seller-logout"
                    onclick="tryItOut('POSTapi-seller-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-seller-logout"
                    onclick="cancelTryOut('POSTapi-seller-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-seller-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/seller-logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-seller-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-seller-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-my-seller">GET api/my-seller</h2>

<p>
</p>



<span id="example-requests-GETapi-my-seller">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/my-seller" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/my-seller"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-my-seller">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-my-seller" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-my-seller"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-my-seller"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-my-seller" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-my-seller">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-my-seller" data-method="GET"
      data-path="api/my-seller"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-my-seller', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-my-seller"
                    onclick="tryItOut('GETapi-my-seller');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-my-seller"
                    onclick="cancelTryOut('GETapi-my-seller');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-my-seller"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/my-seller</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-my-seller"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-my-seller"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-seller-campaign">GET api/seller/campaign</h2>

<p>
</p>



<span id="example-requests-GETapi-seller-campaign">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/seller/campaign" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/campaign"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-seller-campaign">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-seller-campaign" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-seller-campaign"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-seller-campaign"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-seller-campaign" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-seller-campaign">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-seller-campaign" data-method="GET"
      data-path="api/seller/campaign"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-seller-campaign', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-seller-campaign"
                    onclick="tryItOut('GETapi-seller-campaign');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-seller-campaign"
                    onclick="cancelTryOut('GETapi-seller-campaign');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-seller-campaign"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/seller/campaign</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-seller-campaign"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-seller-campaign"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-seller-campaign">POST api/seller/campaign</h2>

<p>
</p>



<span id="example-requests-POSTapi-seller-campaign">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/seller/campaign" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"vmqeopfuudtdsufvyvddq\",
    \"code\": \"amniihfqcoynlazghdtqt\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"type\": \"x_buy_y_pay\",
    \"discount_value\": 12,
    \"buy_quantity\": 66,
    \"pay_quantity\": 13,
    \"min_subtotal\": 65,
    \"usage_limit\": 72,
    \"per_user_limit\": 19,
    \"is_active\": true,
    \"starts_at\": \"2107-06-24\",
    \"ends_at\": \"2107-06-24\",
    \"product_ids\": [
        17
    ],
    \"category_ids\": [
        17
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/campaign"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "vmqeopfuudtdsufvyvddq",
    "code": "amniihfqcoynlazghdtqt",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "type": "x_buy_y_pay",
    "discount_value": 12,
    "buy_quantity": 66,
    "pay_quantity": 13,
    "min_subtotal": 65,
    "usage_limit": 72,
    "per_user_limit": 19,
    "is_active": true,
    "starts_at": "2107-06-24",
    "ends_at": "2107-06-24",
    "product_ids": [
        17
    ],
    "category_ids": [
        17
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-seller-campaign">
</span>
<span id="execution-results-POSTapi-seller-campaign" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-seller-campaign"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-seller-campaign"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-seller-campaign" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-seller-campaign">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-seller-campaign" data-method="POST"
      data-path="api/seller/campaign"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-seller-campaign', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-seller-campaign"
                    onclick="tryItOut('POSTapi-seller-campaign');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-seller-campaign"
                    onclick="cancelTryOut('POSTapi-seller-campaign');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-seller-campaign"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/seller/campaign</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-seller-campaign"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-seller-campaign"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-seller-campaign"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="POSTapi-seller-campaign"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-seller-campaign"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-seller-campaign"
               value="x_buy_y_pay"
               data-component="body">
    <br>
<p>Example: <code>x_buy_y_pay</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>percentage</code></li> <li><code>fixed</code></li> <li><code>x_buy_y_pay</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>discount_value</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="discount_value"                data-endpoint="POSTapi-seller-campaign"
               value="12"
               data-component="body">
    <br>
<p>This field is required when <code>type</code> is <code>percentage</code> or <code>fixed</code>. Must be at least 0. Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>buy_quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="buy_quantity"                data-endpoint="POSTapi-seller-campaign"
               value="66"
               data-component="body">
    <br>
<p>This field is required when <code>type</code> is <code>x_buy_y_pay</code>. Must be at least 1. Example: <code>66</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pay_quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="pay_quantity"                data-endpoint="POSTapi-seller-campaign"
               value="13"
               data-component="body">
    <br>
<p>This field is required when <code>type</code> is <code>x_buy_y_pay</code>. Must be at least 0. Example: <code>13</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>min_subtotal</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="min_subtotal"                data-endpoint="POSTapi-seller-campaign"
               value="65"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>65</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>usage_limit</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="usage_limit"                data-endpoint="POSTapi-seller-campaign"
               value="72"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>72</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>per_user_limit</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="per_user_limit"                data-endpoint="POSTapi-seller-campaign"
               value="19"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>19</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-seller-campaign" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="POSTapi-seller-campaign"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-seller-campaign" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="POSTapi-seller-campaign"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>starts_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="starts_at"                data-endpoint="POSTapi-seller-campaign"
               value="2107-06-24"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after or equal to <code>today</code>. Example: <code>2107-06-24</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ends_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ends_at"                data-endpoint="POSTapi-seller-campaign"
               value="2107-06-24"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>starts_at</code>. Example: <code>2107-06-24</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_ids</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_ids[0]"                data-endpoint="POSTapi-seller-campaign"
               data-component="body">
        <input type="number" style="display: none"
               name="product_ids[1]"                data-endpoint="POSTapi-seller-campaign"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the products table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category_ids</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="category_ids[0]"                data-endpoint="POSTapi-seller-campaign"
               data-component="body">
        <input type="number" style="display: none"
               name="category_ids[1]"                data-endpoint="POSTapi-seller-campaign"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the categories table.</p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-seller-campaign--id-">GET api/seller/campaign/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-seller-campaign--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/seller/campaign/3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/campaign/3"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-seller-campaign--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-seller-campaign--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-seller-campaign--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-seller-campaign--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-seller-campaign--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-seller-campaign--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-seller-campaign--id-" data-method="GET"
      data-path="api/seller/campaign/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-seller-campaign--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-seller-campaign--id-"
                    onclick="tryItOut('GETapi-seller-campaign--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-seller-campaign--id-"
                    onclick="cancelTryOut('GETapi-seller-campaign--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-seller-campaign--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/seller/campaign/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-seller-campaign--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-seller-campaign--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-seller-campaign--id-"
               value="3"
               data-component="url">
    <br>
<p>The ID of the campaign. Example: <code>3</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-seller-campaign--id-">PUT api/seller/campaign/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-seller-campaign--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/seller/campaign/3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"vmqeopfuudtdsufvyvddq\",
    \"code\": \"amniihfqcoynlazghdtqt\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"type\": \"x_buy_y_pay\",
    \"discount_value\": 4,
    \"buy_quantity\": 66,
    \"pay_quantity\": 13,
    \"min_subtotal\": 65,
    \"usage_limit\": 72,
    \"per_user_limit\": 19,
    \"is_active\": true,
    \"starts_at\": \"2026-05-25T21:38:28\",
    \"ends_at\": \"2107-06-24\",
    \"product_ids\": [
        17
    ],
    \"category_ids\": [
        17
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/campaign/3"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "vmqeopfuudtdsufvyvddq",
    "code": "amniihfqcoynlazghdtqt",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "type": "x_buy_y_pay",
    "discount_value": 4,
    "buy_quantity": 66,
    "pay_quantity": 13,
    "min_subtotal": 65,
    "usage_limit": 72,
    "per_user_limit": 19,
    "is_active": true,
    "starts_at": "2026-05-25T21:38:28",
    "ends_at": "2107-06-24",
    "product_ids": [
        17
    ],
    "category_ids": [
        17
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-seller-campaign--id-">
</span>
<span id="execution-results-PUTapi-seller-campaign--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-seller-campaign--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-seller-campaign--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-seller-campaign--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-seller-campaign--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-seller-campaign--id-" data-method="PUT"
      data-path="api/seller/campaign/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-seller-campaign--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-seller-campaign--id-"
                    onclick="tryItOut('PUTapi-seller-campaign--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-seller-campaign--id-"
                    onclick="cancelTryOut('PUTapi-seller-campaign--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-seller-campaign--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/seller/campaign/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/seller/campaign/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-seller-campaign--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-seller-campaign--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-seller-campaign--id-"
               value="3"
               data-component="url">
    <br>
<p>The ID of the campaign. Example: <code>3</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-seller-campaign--id-"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="PUTapi-seller-campaign--id-"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-seller-campaign--id-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="PUTapi-seller-campaign--id-"
               value="x_buy_y_pay"
               data-component="body">
    <br>
<p>Example: <code>x_buy_y_pay</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>percentage</code></li> <li><code>fixed</code></li> <li><code>x_buy_y_pay</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>discount_value</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="discount_value"                data-endpoint="PUTapi-seller-campaign--id-"
               value="4"
               data-component="body">
    <br>
<p>This field is required when <code>type</code> is <code>percentage</code> or <code>fixed</code>. Must be at least 0. Must not be greater than 100. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>buy_quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="buy_quantity"                data-endpoint="PUTapi-seller-campaign--id-"
               value="66"
               data-component="body">
    <br>
<p>This field is required when <code>type</code> is <code>x_buy_y_pay</code>. Must be at least 1. Example: <code>66</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pay_quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="pay_quantity"                data-endpoint="PUTapi-seller-campaign--id-"
               value="13"
               data-component="body">
    <br>
<p>This field is required when <code>type</code> is <code>x_buy_y_pay</code>. Must be at least 0. Example: <code>13</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>min_subtotal</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="min_subtotal"                data-endpoint="PUTapi-seller-campaign--id-"
               value="65"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>65</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>usage_limit</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="usage_limit"                data-endpoint="PUTapi-seller-campaign--id-"
               value="72"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>72</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>per_user_limit</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="per_user_limit"                data-endpoint="PUTapi-seller-campaign--id-"
               value="19"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>19</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-seller-campaign--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="PUTapi-seller-campaign--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-seller-campaign--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="PUTapi-seller-campaign--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>starts_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="starts_at"                data-endpoint="PUTapi-seller-campaign--id-"
               value="2026-05-25T21:38:28"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-05-25T21:38:28</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ends_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ends_at"                data-endpoint="PUTapi-seller-campaign--id-"
               value="2107-06-24"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>starts_at</code>. Example: <code>2107-06-24</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_ids</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_ids[0]"                data-endpoint="PUTapi-seller-campaign--id-"
               data-component="body">
        <input type="number" style="display: none"
               name="product_ids[1]"                data-endpoint="PUTapi-seller-campaign--id-"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the products table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category_ids</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="category_ids[0]"                data-endpoint="PUTapi-seller-campaign--id-"
               data-component="body">
        <input type="number" style="display: none"
               name="category_ids[1]"                data-endpoint="PUTapi-seller-campaign--id-"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the categories table.</p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-seller-campaign--id-">DELETE api/seller/campaign/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-seller-campaign--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/seller/campaign/3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/campaign/3"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-seller-campaign--id-">
</span>
<span id="execution-results-DELETEapi-seller-campaign--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-seller-campaign--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-seller-campaign--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-seller-campaign--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-seller-campaign--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-seller-campaign--id-" data-method="DELETE"
      data-path="api/seller/campaign/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-seller-campaign--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-seller-campaign--id-"
                    onclick="tryItOut('DELETEapi-seller-campaign--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-seller-campaign--id-"
                    onclick="cancelTryOut('DELETEapi-seller-campaign--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-seller-campaign--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/seller/campaign/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-seller-campaign--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-seller-campaign--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-seller-campaign--id-"
               value="3"
               data-component="url">
    <br>
<p>The ID of the campaign. Example: <code>3</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-seller-product">GET api/seller/product</h2>

<p>
</p>



<span id="example-requests-GETapi-seller-product">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/seller/product" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/product"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-seller-product">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-seller-product" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-seller-product"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-seller-product"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-seller-product" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-seller-product">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-seller-product" data-method="GET"
      data-path="api/seller/product"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-seller-product', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-seller-product"
                    onclick="tryItOut('GETapi-seller-product');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-seller-product"
                    onclick="cancelTryOut('GETapi-seller-product');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-seller-product"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/seller/product</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-seller-product"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-seller-product"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-seller-product">POST api/seller/product</h2>

<p>
</p>



<span id="example-requests-POSTapi-seller-product">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/seller/product" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "title=vmqeopfuudtdsufvyvddq"\
    --form "description=Dolores dolorum amet iste laborum eius est dolor."\
    --form "meta_description=dtdsufvyvddqamniihfqc"\
    --form "meta_title=oynlazghdtqtqxbajwbpi"\
    --form "variants[][color_name]=vmqeopfuudtdsufvyvddq"\
    --form "variants[][color_code]=amniihf"\
    --form "variants[][price_cents]=57"\
    --form "variants[][is_popular]=1"\
    --form "variants[][sizes][][size_option_id]=73"\
    --form "variants[][sizes][][price_cents]=45"\
    --form "variants[][sizes][][inventory][on_hand]=56"\
    --form "variants[][sizes][][inventory][reserved]=16"\
    --form "variants[][sizes][][inventory][warehouse_id]=50"\
    --form "variants[][sizes][][inventory][min_stock_level]=55"\
    --form "variants[][images][]=@/tmp/phpeJkDCS" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/product"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('title', 'vmqeopfuudtdsufvyvddq');
body.append('description', 'Dolores dolorum amet iste laborum eius est dolor.');
body.append('meta_description', 'dtdsufvyvddqamniihfqc');
body.append('meta_title', 'oynlazghdtqtqxbajwbpi');
body.append('variants[][color_name]', 'vmqeopfuudtdsufvyvddq');
body.append('variants[][color_code]', 'amniihf');
body.append('variants[][price_cents]', '57');
body.append('variants[][is_popular]', '1');
body.append('variants[][sizes][][size_option_id]', '73');
body.append('variants[][sizes][][price_cents]', '45');
body.append('variants[][sizes][][inventory][on_hand]', '56');
body.append('variants[][sizes][][inventory][reserved]', '16');
body.append('variants[][sizes][][inventory][warehouse_id]', '50');
body.append('variants[][sizes][][inventory][min_stock_level]', '55');
body.append('variants[][images][]', document.querySelector('input[name="variants[][images][]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-seller-product">
</span>
<span id="execution-results-POSTapi-seller-product" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-seller-product"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-seller-product"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-seller-product" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-seller-product">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-seller-product" data-method="POST"
      data-path="api/seller/product"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-seller-product', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-seller-product"
                    onclick="tryItOut('POSTapi-seller-product');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-seller-product"
                    onclick="cancelTryOut('POSTapi-seller-product');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-seller-product"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/seller/product</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-seller-product"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-seller-product"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-seller-product"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category_id"                data-endpoint="POSTapi-seller-product"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the categories table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-seller-product"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>meta_description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="meta_description"                data-endpoint="POSTapi-seller-product"
               value="dtdsufvyvddqamniihfqc"
               data-component="body">
    <br>
<p>Must not be greater than 160 characters. Example: <code>dtdsufvyvddqamniihfqc</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>meta_title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="meta_title"                data-endpoint="POSTapi-seller-product"
               value="oynlazghdtqtqxbajwbpi"
               data-component="body">
    <br>
<p>Must not be greater than 60 characters. Example: <code>oynlazghdtqtqxbajwbpi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>variants</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>
<p>Must have at least 1 items.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>color_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="variants.0.color_name"                data-endpoint="POSTapi-seller-product"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>color_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="variants.0.color_code"                data-endpoint="POSTapi-seller-product"
               value="amniihf"
               data-component="body">
    <br>
<p>Must match the regex /^#[0-9A-Fa-f]{6}$/. Must be 7 characters. Example: <code>amniihf</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>price_cents</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="variants.0.price_cents"                data-endpoint="POSTapi-seller-product"
               value="57"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>57</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>is_popular</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-seller-product" style="display: none">
            <input type="radio" name="variants.0.is_popular"
                   value="true"
                   data-endpoint="POSTapi-seller-product"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-seller-product" style="display: none">
            <input type="radio" name="variants.0.is_popular"
                   value="false"
                   data-endpoint="POSTapi-seller-product"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>images</code></b>&nbsp;&nbsp;
<small>file[]</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="variants.0.images[0]"                data-endpoint="POSTapi-seller-product"
               data-component="body">
        <input type="file" style="display: none"
               name="variants.0.images[1]"                data-endpoint="POSTapi-seller-product"
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes.</p>
                    </div>
                                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>sizes</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>
<p>Must have at least 1 items.</p>
            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>size_option_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="variants.0.sizes.0.size_option_id"                data-endpoint="POSTapi-seller-product"
               value="73"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>73</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>price_cents</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="variants.0.sizes.0.price_cents"                data-endpoint="POSTapi-seller-product"
               value="45"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>45</code></p>
                    </div>
                                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>inventory</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>on_hand</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="variants.0.sizes.0.inventory.on_hand"                data-endpoint="POSTapi-seller-product"
               value="56"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>56</code></p>
                    </div>
                                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>reserved</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="variants.0.sizes.0.inventory.reserved"                data-endpoint="POSTapi-seller-product"
               value="16"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>warehouse_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="variants.0.sizes.0.inventory.warehouse_id"                data-endpoint="POSTapi-seller-product"
               value="50"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>50</code></p>
                    </div>
                                                                <div style="margin-left: 42px; clear: unset;">
                        <b style="line-height: 2;"><code>min_stock_level</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="variants.0.sizes.0.inventory.min_stock_level"                data-endpoint="POSTapi-seller-product"
               value="55"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>55</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-seller-product--product_slug-">GET api/seller/product/{product_slug}</h2>

<p>
</p>



<span id="example-requests-GETapi-seller-product--product_slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/seller/product/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/product/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-seller-product--product_slug-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-seller-product--product_slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-seller-product--product_slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-seller-product--product_slug-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-seller-product--product_slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-seller-product--product_slug-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-seller-product--product_slug-" data-method="GET"
      data-path="api/seller/product/{product_slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-seller-product--product_slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-seller-product--product_slug-"
                    onclick="tryItOut('GETapi-seller-product--product_slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-seller-product--product_slug-"
                    onclick="cancelTryOut('GETapi-seller-product--product_slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-seller-product--product_slug-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/seller/product/{product_slug}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-seller-product--product_slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-seller-product--product_slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_slug</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_slug"                data-endpoint="GETapi-seller-product--product_slug-"
               value="1"
               data-component="url">
    <br>
<p>The slug of the product. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-seller-product--id-">PUT api/seller/product/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-seller-product--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/seller/product/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"vmqeopfuudtdsufvyvddq\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"meta_description\": \"dtdsufvyvddqamniihfqc\",
    \"meta_title\": \"oynlazghdtqtqxbajwbpi\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/product/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "vmqeopfuudtdsufvyvddq",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "meta_description": "dtdsufvyvddqamniihfqc",
    "meta_title": "oynlazghdtqtqxbajwbpi"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-seller-product--id-">
</span>
<span id="execution-results-PUTapi-seller-product--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-seller-product--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-seller-product--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-seller-product--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-seller-product--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-seller-product--id-" data-method="PUT"
      data-path="api/seller/product/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-seller-product--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-seller-product--id-"
                    onclick="tryItOut('PUTapi-seller-product--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-seller-product--id-"
                    onclick="cancelTryOut('PUTapi-seller-product--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-seller-product--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/seller/product/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/seller/product/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-seller-product--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-seller-product--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-seller-product--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-seller-product--id-"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category_id"                data-endpoint="PUTapi-seller-product--id-"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the categories table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-seller-product--id-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>meta_description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="meta_description"                data-endpoint="PUTapi-seller-product--id-"
               value="dtdsufvyvddqamniihfqc"
               data-component="body">
    <br>
<p>Must not be greater than 160 characters. Example: <code>dtdsufvyvddqamniihfqc</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>meta_title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="meta_title"                data-endpoint="PUTapi-seller-product--id-"
               value="oynlazghdtqtqxbajwbpi"
               data-component="body">
    <br>
<p>Must not be greater than 60 characters. Example: <code>oynlazghdtqtqxbajwbpi</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-seller-product--id-">DELETE api/seller/product/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-seller-product--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/seller/product/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/product/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-seller-product--id-">
</span>
<span id="execution-results-DELETEapi-seller-product--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-seller-product--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-seller-product--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-seller-product--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-seller-product--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-seller-product--id-" data-method="DELETE"
      data-path="api/seller/product/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-seller-product--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-seller-product--id-"
                    onclick="tryItOut('DELETEapi-seller-product--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-seller-product--id-"
                    onclick="cancelTryOut('DELETEapi-seller-product--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-seller-product--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/seller/product/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-seller-product--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-seller-product--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-seller-product--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-seller-product--product--variants">GET api/seller/product/{product}/variants</h2>

<p>
</p>



<span id="example-requests-GETapi-seller-product--product--variants">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/seller/product/1/variants" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/product/1/variants"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-seller-product--product--variants">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-seller-product--product--variants" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-seller-product--product--variants"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-seller-product--product--variants"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-seller-product--product--variants" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-seller-product--product--variants">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-seller-product--product--variants" data-method="GET"
      data-path="api/seller/product/{product}/variants"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-seller-product--product--variants', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-seller-product--product--variants"
                    onclick="tryItOut('GETapi-seller-product--product--variants');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-seller-product--product--variants"
                    onclick="cancelTryOut('GETapi-seller-product--product--variants');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-seller-product--product--variants"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/seller/product/{product}/variants</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-seller-product--product--variants"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-seller-product--product--variants"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product"                data-endpoint="GETapi-seller-product--product--variants"
               value="1"
               data-component="url">
    <br>
<p>The product. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-seller-product--product--variants">POST api/seller/product/{product}/variants</h2>

<p>
</p>



<span id="example-requests-POSTapi-seller-product--product--variants">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/seller/product/1/variants" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"color_name\": \"vmqeopfuudtdsufvyvddq\",
    \"color_code\": \"#01E45C\",
    \"price_cents\": 66,
    \"is_popular\": true,
    \"is_active\": true,
    \"sizes\": [
        {
            \"size_option_id\": 73,
            \"price_cents\": 45,
            \"inventory\": [
                {
                    \"on_hand\": 56,
                    \"reserved\": 16,
                    \"warehouse_id\": 50
                }
            ]
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/product/1/variants"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "color_name": "vmqeopfuudtdsufvyvddq",
    "color_code": "#01E45C",
    "price_cents": 66,
    "is_popular": true,
    "is_active": true,
    "sizes": [
        {
            "size_option_id": 73,
            "price_cents": 45,
            "inventory": [
                {
                    "on_hand": 56,
                    "reserved": 16,
                    "warehouse_id": 50
                }
            ]
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-seller-product--product--variants">
</span>
<span id="execution-results-POSTapi-seller-product--product--variants" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-seller-product--product--variants"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-seller-product--product--variants"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-seller-product--product--variants" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-seller-product--product--variants">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-seller-product--product--variants" data-method="POST"
      data-path="api/seller/product/{product}/variants"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-seller-product--product--variants', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-seller-product--product--variants"
                    onclick="tryItOut('POSTapi-seller-product--product--variants');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-seller-product--product--variants"
                    onclick="cancelTryOut('POSTapi-seller-product--product--variants');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-seller-product--product--variants"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/seller/product/{product}/variants</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-seller-product--product--variants"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-seller-product--product--variants"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product"                data-endpoint="POSTapi-seller-product--product--variants"
               value="1"
               data-component="url">
    <br>
<p>The product. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color_name"                data-endpoint="POSTapi-seller-product--product--variants"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 120 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color_code"                data-endpoint="POSTapi-seller-product--product--variants"
               value="#01E45C"
               data-component="body">
    <br>
<p>Must match the regex /^#([A-Fa-f0-9]{6})$/. Example: <code>#01E45C</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_cents</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_cents"                data-endpoint="POSTapi-seller-product--product--variants"
               value="66"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>66</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_popular</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-seller-product--product--variants" style="display: none">
            <input type="radio" name="is_popular"
                   value="true"
                   data-endpoint="POSTapi-seller-product--product--variants"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-seller-product--product--variants" style="display: none">
            <input type="radio" name="is_popular"
                   value="false"
                   data-endpoint="POSTapi-seller-product--product--variants"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-seller-product--product--variants" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="POSTapi-seller-product--product--variants"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-seller-product--product--variants" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="POSTapi-seller-product--product--variants"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>sizes</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>
<p>Must have at least 1 items.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>size_option_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="sizes.0.size_option_id"                data-endpoint="POSTapi-seller-product--product--variants"
               value="73"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>73</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>price_cents</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="sizes.0.price_cents"                data-endpoint="POSTapi-seller-product--product--variants"
               value="45"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>45</code></p>
                    </div>
                                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>inventory</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>on_hand</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="sizes.0.inventory.0.on_hand"                data-endpoint="POSTapi-seller-product--product--variants"
               value="56"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>56</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>reserved</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="sizes.0.inventory.0.reserved"                data-endpoint="POSTapi-seller-product--product--variants"
               value="16"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>warehouse_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="sizes.0.inventory.0.warehouse_id"                data-endpoint="POSTapi-seller-product--product--variants"
               value="50"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>50</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-seller-product--product--variants--variant-">GET api/seller/product/{product}/variants/{variant}</h2>

<p>
</p>



<span id="example-requests-GETapi-seller-product--product--variants--variant-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/seller/product/1/variants/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/product/1/variants/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-seller-product--product--variants--variant-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-seller-product--product--variants--variant-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-seller-product--product--variants--variant-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-seller-product--product--variants--variant-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-seller-product--product--variants--variant-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-seller-product--product--variants--variant-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-seller-product--product--variants--variant-" data-method="GET"
      data-path="api/seller/product/{product}/variants/{variant}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-seller-product--product--variants--variant-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-seller-product--product--variants--variant-"
                    onclick="tryItOut('GETapi-seller-product--product--variants--variant-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-seller-product--product--variants--variant-"
                    onclick="cancelTryOut('GETapi-seller-product--product--variants--variant-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-seller-product--product--variants--variant-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/seller/product/{product}/variants/{variant}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-seller-product--product--variants--variant-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-seller-product--product--variants--variant-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product"                data-endpoint="GETapi-seller-product--product--variants--variant-"
               value="1"
               data-component="url">
    <br>
<p>The product. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>variant</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="variant"                data-endpoint="GETapi-seller-product--product--variants--variant-"
               value="consequatur"
               data-component="url">
    <br>
<p>The variant. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-seller-product--product--variants--variant-">PUT api/seller/product/{product}/variants/{variant}</h2>

<p>
</p>



<span id="example-requests-PUTapi-seller-product--product--variants--variant-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/seller/product/1/variants/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"color_name\": \"vmqeopfuudtdsufvyvddq\",
    \"color_code\": \"#01E45C\",
    \"price_cents\": 66,
    \"is_popular\": true,
    \"is_active\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/product/1/variants/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "color_name": "vmqeopfuudtdsufvyvddq",
    "color_code": "#01E45C",
    "price_cents": 66,
    "is_popular": true,
    "is_active": false
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-seller-product--product--variants--variant-">
</span>
<span id="execution-results-PUTapi-seller-product--product--variants--variant-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-seller-product--product--variants--variant-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-seller-product--product--variants--variant-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-seller-product--product--variants--variant-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-seller-product--product--variants--variant-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-seller-product--product--variants--variant-" data-method="PUT"
      data-path="api/seller/product/{product}/variants/{variant}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-seller-product--product--variants--variant-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-seller-product--product--variants--variant-"
                    onclick="tryItOut('PUTapi-seller-product--product--variants--variant-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-seller-product--product--variants--variant-"
                    onclick="cancelTryOut('PUTapi-seller-product--product--variants--variant-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-seller-product--product--variants--variant-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/seller/product/{product}/variants/{variant}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-seller-product--product--variants--variant-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-seller-product--product--variants--variant-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product"                data-endpoint="PUTapi-seller-product--product--variants--variant-"
               value="1"
               data-component="url">
    <br>
<p>The product. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>variant</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="variant"                data-endpoint="PUTapi-seller-product--product--variants--variant-"
               value="consequatur"
               data-component="url">
    <br>
<p>The variant. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color_name"                data-endpoint="PUTapi-seller-product--product--variants--variant-"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 120 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color_code"                data-endpoint="PUTapi-seller-product--product--variants--variant-"
               value="#01E45C"
               data-component="body">
    <br>
<p>Must match the regex /^#([A-Fa-f0-9]{6})$/. Example: <code>#01E45C</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_cents</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_cents"                data-endpoint="PUTapi-seller-product--product--variants--variant-"
               value="66"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>66</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_popular</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-seller-product--product--variants--variant-" style="display: none">
            <input type="radio" name="is_popular"
                   value="true"
                   data-endpoint="PUTapi-seller-product--product--variants--variant-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-seller-product--product--variants--variant-" style="display: none">
            <input type="radio" name="is_popular"
                   value="false"
                   data-endpoint="PUTapi-seller-product--product--variants--variant-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-seller-product--product--variants--variant-" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="PUTapi-seller-product--product--variants--variant-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-seller-product--product--variants--variant-" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="PUTapi-seller-product--product--variants--variant-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-seller-product--product--variants--variant-">DELETE api/seller/product/{product}/variants/{variant}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-seller-product--product--variants--variant-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/seller/product/1/variants/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/product/1/variants/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-seller-product--product--variants--variant-">
</span>
<span id="execution-results-DELETEapi-seller-product--product--variants--variant-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-seller-product--product--variants--variant-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-seller-product--product--variants--variant-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-seller-product--product--variants--variant-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-seller-product--product--variants--variant-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-seller-product--product--variants--variant-" data-method="DELETE"
      data-path="api/seller/product/{product}/variants/{variant}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-seller-product--product--variants--variant-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-seller-product--product--variants--variant-"
                    onclick="tryItOut('DELETEapi-seller-product--product--variants--variant-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-seller-product--product--variants--variant-"
                    onclick="cancelTryOut('DELETEapi-seller-product--product--variants--variant-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-seller-product--product--variants--variant-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/seller/product/{product}/variants/{variant}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-seller-product--product--variants--variant-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-seller-product--product--variants--variant-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product"                data-endpoint="DELETEapi-seller-product--product--variants--variant-"
               value="1"
               data-component="url">
    <br>
<p>The product. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>variant</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="variant"                data-endpoint="DELETEapi-seller-product--product--variants--variant-"
               value="consequatur"
               data-component="url">
    <br>
<p>The variant. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-seller-product--product_id--variants--variant_id--sizes">POST api/seller/product/{product_id}/variants/{variant_id}/sizes</h2>

<p>
</p>



<span id="example-requests-POSTapi-seller-product--product_id--variants--variant_id--sizes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/seller/product/1/variants/2/sizes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"size_option_id\": 73,
    \"price_cents\": 45,
    \"is_active\": false,
    \"inventory\": {
        \"on_hand\": 56,
        \"reserved\": 16,
        \"min_stock_level\": 50,
        \"warehouse_id\": 17
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/product/1/variants/2/sizes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "size_option_id": 73,
    "price_cents": 45,
    "is_active": false,
    "inventory": {
        "on_hand": 56,
        "reserved": 16,
        "min_stock_level": 50,
        "warehouse_id": 17
    }
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-seller-product--product_id--variants--variant_id--sizes">
</span>
<span id="execution-results-POSTapi-seller-product--product_id--variants--variant_id--sizes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-seller-product--product_id--variants--variant_id--sizes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-seller-product--product_id--variants--variant_id--sizes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-seller-product--product_id--variants--variant_id--sizes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-seller-product--product_id--variants--variant_id--sizes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-seller-product--product_id--variants--variant_id--sizes" data-method="POST"
      data-path="api/seller/product/{product_id}/variants/{variant_id}/sizes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-seller-product--product_id--variants--variant_id--sizes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-seller-product--product_id--variants--variant_id--sizes"
                    onclick="tryItOut('POSTapi-seller-product--product_id--variants--variant_id--sizes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-seller-product--product_id--variants--variant_id--sizes"
                    onclick="cancelTryOut('POSTapi-seller-product--product_id--variants--variant_id--sizes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-seller-product--product_id--variants--variant_id--sizes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/seller/product/{product_id}/variants/{variant_id}/sizes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-seller-product--product_id--variants--variant_id--sizes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-seller-product--product_id--variants--variant_id--sizes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_id"                data-endpoint="POSTapi-seller-product--product_id--variants--variant_id--sizes"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>variant_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="variant_id"                data-endpoint="POSTapi-seller-product--product_id--variants--variant_id--sizes"
               value="2"
               data-component="url">
    <br>
<p>The ID of the variant. Example: <code>2</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>size_option_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="size_option_id"                data-endpoint="POSTapi-seller-product--product_id--variants--variant_id--sizes"
               value="73"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the attribute_options table. Must be at least 1. Example: <code>73</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_cents</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_cents"                data-endpoint="POSTapi-seller-product--product_id--variants--variant_id--sizes"
               value="45"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>45</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-seller-product--product_id--variants--variant_id--sizes" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="POSTapi-seller-product--product_id--variants--variant_id--sizes"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-seller-product--product_id--variants--variant_id--sizes" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="POSTapi-seller-product--product_id--variants--variant_id--sizes"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>inventory</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>on_hand</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="inventory.on_hand"                data-endpoint="POSTapi-seller-product--product_id--variants--variant_id--sizes"
               value="56"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>56</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>reserved</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="inventory.reserved"                data-endpoint="POSTapi-seller-product--product_id--variants--variant_id--sizes"
               value="16"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>min_stock_level</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="inventory.min_stock_level"                data-endpoint="POSTapi-seller-product--product_id--variants--variant_id--sizes"
               value="50"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>50</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>warehouse_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="inventory.warehouse_id"                data-endpoint="POSTapi-seller-product--product_id--variants--variant_id--sizes"
               value="17"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the warehouses table. Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-">PUT api/seller/product/{product_id}/variants/{variant_id}/sizes/{size_id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/seller/product/1/variants/2/sizes/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"size_option_id\": 17,
    \"price_cents\": 45,
    \"is_active\": false,
    \"inventory\": {
        \"on_hand\": 56,
        \"reserved\": 16,
        \"min_stock_level\": 50,
        \"warehouse_id\": 17
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/product/1/variants/2/sizes/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "size_option_id": 17,
    "price_cents": 45,
    "is_active": false,
    "inventory": {
        "on_hand": 56,
        "reserved": 16,
        "min_stock_level": 50,
        "warehouse_id": 17
    }
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-">
</span>
<span id="execution-results-PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-" data-method="PUT"
      data-path="api/seller/product/{product_id}/variants/{variant_id}/sizes/{size_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
                    onclick="tryItOut('PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
                    onclick="cancelTryOut('PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/seller/product/{product_id}/variants/{variant_id}/sizes/{size_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_id"                data-endpoint="PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>variant_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="variant_id"                data-endpoint="PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the variant. Example: <code>2</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>size_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="size_id"                data-endpoint="PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the size. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>size_option_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="size_option_id"                data-endpoint="PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_cents</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price_cents"                data-endpoint="PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
               value="45"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>45</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>inventory</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>on_hand</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="inventory.on_hand"                data-endpoint="PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
               value="56"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>56</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>reserved</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="inventory.reserved"                data-endpoint="PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
               value="16"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>min_stock_level</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="inventory.min_stock_level"                data-endpoint="PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
               value="50"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>50</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>warehouse_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="inventory.warehouse_id"                data-endpoint="PUTapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
               value="17"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the warehouses table. Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-">DELETE api/seller/product/{product_id}/variants/{variant_id}/sizes/{size_id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/seller/product/1/variants/2/sizes/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/product/1/variants/2/sizes/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-">
</span>
<span id="execution-results-DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-" data-method="DELETE"
      data-path="api/seller/product/{product_id}/variants/{variant_id}/sizes/{size_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
                    onclick="tryItOut('DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
                    onclick="cancelTryOut('DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/seller/product/{product_id}/variants/{variant_id}/sizes/{size_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_id"                data-endpoint="DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>variant_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="variant_id"                data-endpoint="DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the variant. Example: <code>2</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>size_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="size_id"                data-endpoint="DELETEapi-seller-product--product_id--variants--variant_id--sizes--size_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the size. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-seller-product--product_id--variants--variant--images">POST api/seller/product/{product_id}/variants/{variant}/images</h2>

<p>
</p>



<span id="example-requests-POSTapi-seller-product--product_id--variants--variant--images">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/seller/product/1/variants/consequatur/images" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "image=@/tmp/phpBprweg" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/product/1/variants/consequatur/images"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-seller-product--product_id--variants--variant--images">
</span>
<span id="execution-results-POSTapi-seller-product--product_id--variants--variant--images" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-seller-product--product_id--variants--variant--images"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-seller-product--product_id--variants--variant--images"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-seller-product--product_id--variants--variant--images" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-seller-product--product_id--variants--variant--images">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-seller-product--product_id--variants--variant--images" data-method="POST"
      data-path="api/seller/product/{product_id}/variants/{variant}/images"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-seller-product--product_id--variants--variant--images', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-seller-product--product_id--variants--variant--images"
                    onclick="tryItOut('POSTapi-seller-product--product_id--variants--variant--images');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-seller-product--product_id--variants--variant--images"
                    onclick="cancelTryOut('POSTapi-seller-product--product_id--variants--variant--images');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-seller-product--product_id--variants--variant--images"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/seller/product/{product_id}/variants/{variant}/images</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-seller-product--product_id--variants--variant--images"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-seller-product--product_id--variants--variant--images"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_id"                data-endpoint="POSTapi-seller-product--product_id--variants--variant--images"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>variant</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="variant"                data-endpoint="POSTapi-seller-product--product_id--variants--variant--images"
               value="consequatur"
               data-component="url">
    <br>
<p>The variant. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="image"                data-endpoint="POSTapi-seller-product--product_id--variants--variant--images"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>/tmp/phpBprweg</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-seller-product--product_id--variants--variant--images--image-">DELETE api/seller/product/{product_id}/variants/{variant}/images/{image}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-seller-product--product_id--variants--variant--images--image-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/seller/product/1/variants/consequatur/images/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/product/1/variants/consequatur/images/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-seller-product--product_id--variants--variant--images--image-">
</span>
<span id="execution-results-DELETEapi-seller-product--product_id--variants--variant--images--image-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-seller-product--product_id--variants--variant--images--image-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-seller-product--product_id--variants--variant--images--image-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-seller-product--product_id--variants--variant--images--image-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-seller-product--product_id--variants--variant--images--image-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-seller-product--product_id--variants--variant--images--image-" data-method="DELETE"
      data-path="api/seller/product/{product_id}/variants/{variant}/images/{image}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-seller-product--product_id--variants--variant--images--image-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-seller-product--product_id--variants--variant--images--image-"
                    onclick="tryItOut('DELETEapi-seller-product--product_id--variants--variant--images--image-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-seller-product--product_id--variants--variant--images--image-"
                    onclick="cancelTryOut('DELETEapi-seller-product--product_id--variants--variant--images--image-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-seller-product--product_id--variants--variant--images--image-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/seller/product/{product_id}/variants/{variant}/images/{image}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-seller-product--product_id--variants--variant--images--image-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-seller-product--product_id--variants--variant--images--image-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_id"                data-endpoint="DELETEapi-seller-product--product_id--variants--variant--images--image-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>variant</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="variant"                data-endpoint="DELETEapi-seller-product--product_id--variants--variant--images--image-"
               value="consequatur"
               data-component="url">
    <br>
<p>The variant. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="image"                data-endpoint="DELETEapi-seller-product--product_id--variants--variant--images--image-"
               value="consequatur"
               data-component="url">
    <br>
<p>The image. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-seller-product--product_id--variants--variant--images-reorder">PUT api/seller/product/{product_id}/variants/{variant}/images/reorder</h2>

<p>
</p>



<span id="example-requests-PUTapi-seller-product--product_id--variants--variant--images-reorder">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/seller/product/1/variants/consequatur/images/reorder" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"images\": [
        {
            \"id\": 17,
            \"sort_order\": 45
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/product/1/variants/consequatur/images/reorder"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "images": [
        {
            "id": 17,
            "sort_order": 45
        }
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-seller-product--product_id--variants--variant--images-reorder">
</span>
<span id="execution-results-PUTapi-seller-product--product_id--variants--variant--images-reorder" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-seller-product--product_id--variants--variant--images-reorder"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-seller-product--product_id--variants--variant--images-reorder"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-seller-product--product_id--variants--variant--images-reorder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-seller-product--product_id--variants--variant--images-reorder">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-seller-product--product_id--variants--variant--images-reorder" data-method="PUT"
      data-path="api/seller/product/{product_id}/variants/{variant}/images/reorder"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-seller-product--product_id--variants--variant--images-reorder', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-seller-product--product_id--variants--variant--images-reorder"
                    onclick="tryItOut('PUTapi-seller-product--product_id--variants--variant--images-reorder');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-seller-product--product_id--variants--variant--images-reorder"
                    onclick="cancelTryOut('PUTapi-seller-product--product_id--variants--variant--images-reorder');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-seller-product--product_id--variants--variant--images-reorder"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/seller/product/{product_id}/variants/{variant}/images/reorder</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-seller-product--product_id--variants--variant--images-reorder"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-seller-product--product_id--variants--variant--images-reorder"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="product_id"                data-endpoint="PUTapi-seller-product--product_id--variants--variant--images-reorder"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>variant</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="variant"                data-endpoint="PUTapi-seller-product--product_id--variants--variant--images-reorder"
               value="consequatur"
               data-component="url">
    <br>
<p>The variant. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>images</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>
<p>Must have at least 1 items.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="images.0.id"                data-endpoint="PUTapi-seller-product--product_id--variants--variant--images-reorder"
               value="17"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the product_variant_images table. Example: <code>17</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>sort_order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="images.0.sort_order"                data-endpoint="PUTapi-seller-product--product_id--variants--variant--images-reorder"
               value="45"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>45</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-seller-categories--id--children">GET api/seller/categories/{id}/children</h2>

<p>
</p>



<span id="example-requests-GETapi-seller-categories--id--children">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/seller/categories/1/children" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/categories/1/children"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-seller-categories--id--children">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-seller-categories--id--children" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-seller-categories--id--children"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-seller-categories--id--children"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-seller-categories--id--children" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-seller-categories--id--children">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-seller-categories--id--children" data-method="GET"
      data-path="api/seller/categories/{id}/children"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-seller-categories--id--children', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-seller-categories--id--children"
                    onclick="tryItOut('GETapi-seller-categories--id--children');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-seller-categories--id--children"
                    onclick="cancelTryOut('GETapi-seller-categories--id--children');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-seller-categories--id--children"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/seller/categories/{id}/children</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-seller-categories--id--children"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-seller-categories--id--children"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-seller-categories--id--children"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-seller-order">GET api/seller/order</h2>

<p>
</p>



<span id="example-requests-GETapi-seller-order">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/seller/order" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/order"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-seller-order">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-seller-order" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-seller-order"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-seller-order"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-seller-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-seller-order">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-seller-order" data-method="GET"
      data-path="api/seller/order"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-seller-order', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-seller-order"
                    onclick="tryItOut('GETapi-seller-order');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-seller-order"
                    onclick="cancelTryOut('GETapi-seller-order');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-seller-order"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/seller/order</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-seller-order"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-seller-order"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-seller-order--id-">GET api/seller/order/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-seller-order--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/seller/order/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/order/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-seller-order--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Kimlik doğrulaması yapılmamış.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-seller-order--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-seller-order--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-seller-order--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-seller-order--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-seller-order--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-seller-order--id-" data-method="GET"
      data-path="api/seller/order/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-seller-order--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-seller-order--id-"
                    onclick="tryItOut('GETapi-seller-order--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-seller-order--id-"
                    onclick="cancelTryOut('GETapi-seller-order--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-seller-order--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/seller/order/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-seller-order--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-seller-order--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-seller-order--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-seller-orderitem--id--confirm">POST api/seller/orderitem/{id}/confirm</h2>

<p>
</p>



<span id="example-requests-POSTapi-seller-orderitem--id--confirm">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/seller/orderitem/consequatur/confirm" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/orderitem/consequatur/confirm"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-seller-orderitem--id--confirm">
</span>
<span id="execution-results-POSTapi-seller-orderitem--id--confirm" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-seller-orderitem--id--confirm"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-seller-orderitem--id--confirm"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-seller-orderitem--id--confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-seller-orderitem--id--confirm">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-seller-orderitem--id--confirm" data-method="POST"
      data-path="api/seller/orderitem/{id}/confirm"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-seller-orderitem--id--confirm', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-seller-orderitem--id--confirm"
                    onclick="tryItOut('POSTapi-seller-orderitem--id--confirm');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-seller-orderitem--id--confirm"
                    onclick="cancelTryOut('POSTapi-seller-orderitem--id--confirm');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-seller-orderitem--id--confirm"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/seller/orderitem/{id}/confirm</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-seller-orderitem--id--confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-seller-orderitem--id--confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-seller-orderitem--id--confirm"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the orderitem. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-seller-orderitem--id--refund">POST api/seller/orderitem/{id}/refund</h2>

<p>
</p>



<span id="example-requests-POSTapi-seller-orderitem--id--refund">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/seller/orderitem/consequatur/refund" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"reason\": \"vmqeopfuudtdsufvyvddq\",
    \"quantity\": 2
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/seller/orderitem/consequatur/refund"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "reason": "vmqeopfuudtdsufvyvddq",
    "quantity": 2
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-seller-orderitem--id--refund">
</span>
<span id="execution-results-POSTapi-seller-orderitem--id--refund" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-seller-orderitem--id--refund"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-seller-orderitem--id--refund"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-seller-orderitem--id--refund" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-seller-orderitem--id--refund">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-seller-orderitem--id--refund" data-method="POST"
      data-path="api/seller/orderitem/{id}/refund"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-seller-orderitem--id--refund', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-seller-orderitem--id--refund"
                    onclick="tryItOut('POSTapi-seller-orderitem--id--refund');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-seller-orderitem--id--refund"
                    onclick="cancelTryOut('POSTapi-seller-orderitem--id--refund');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-seller-orderitem--id--refund"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/seller/orderitem/{id}/refund</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-seller-orderitem--id--refund"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-seller-orderitem--id--refund"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-seller-orderitem--id--refund"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the orderitem. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reason</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reason"                data-endpoint="POSTapi-seller-orderitem--id--refund"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quantity"                data-endpoint="POSTapi-seller-orderitem--id--refund"
               value="2"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>2</code></p>
        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
