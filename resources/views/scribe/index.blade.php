<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

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
        var tryItOutBaseUrl = "https://fuelpricesapi.nelsoncarrero.dev";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.3.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.3.0.js") }}"></script>

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
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-prices-filter-eia">
                                <a href="#endpoints-GETapi-v1-prices-filter-eia">GET api/v1/prices/filter/eia</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-areas-filter-eia">
                                <a href="#endpoints-GETapi-v1-areas-filter-eia">GET api/v1/areas/filter/eia</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-products-filter-eia">
                                <a href="#endpoints-GETapi-v1-products-filter-eia">GET api/v1/products/filter/eia</a>
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
        <li>Last updated: August 18, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>https://fuelpricesapi.nelsoncarrero.dev/api/v1</code>
</aside>

        

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-v1-prices-filter-eia">GET api/v1/prices/filter/eia</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-prices-filter-eia">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://fuelpricesapi.nelsoncarrero.dev/api/v1/prices/filter/eia" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"period\": \"2025-08-17\",
    \"area\": \"All\",
    \"product\": \"All\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://fuelpricesapi.nelsoncarrero.dev/api/v1/prices/filter/eia"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "period": "2025-08-17",
    "area": "All",
    "product": "All"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-prices-filter-eia">
            <blockquote>
            <p>Example response (200, success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;requested_period&quot;: &quot;2025-08-17&quot;,
    &quot;adjusted_period&quot;: &quot;2025-08-11&quot;,
    &quot;area&quot;: &quot;all&quot;,
    &quot;product&quot;: &quot;all&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;Message&quot;: &quot;The period field is required. (and 2 more errors)&quot;,
    &quot;errors&quot;: {
        &quot;period&quot;: [
            &quot;The period field is required.&quot;
        ],
        &quot;area&quot;: [
            &quot;The area field is required.&quot;
        ],
        &quot;product&quot;: [
            &quot;The product field is required.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-prices-filter-eia" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-prices-filter-eia"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-prices-filter-eia"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-prices-filter-eia" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-prices-filter-eia">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-prices-filter-eia" data-method="GET"
      data-path="api/v1/prices/filter/eia"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-prices-filter-eia', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-prices-filter-eia"
                    onclick="tryItOut('GETapi-v1-prices-filter-eia');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-prices-filter-eia"
                    onclick="cancelTryOut('GETapi-v1-prices-filter-eia');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-prices-filter-eia"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/prices/filter/eia</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-prices-filter-eia"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-prices-filter-eia"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>period</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="period"                data-endpoint="GETapi-v1-prices-filter-eia"
               value="2025-08-17"
               data-component="body">
    <br>
<p>Fecha del periodo a consultar en formato YYYY-MM-DD. Example: <code>2025-08-17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>area</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="area"                data-endpoint="GETapi-v1-prices-filter-eia"
               value="All"
               data-component="body">
    <br>
<p>Área a consultar el precio. Example: <code>All</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product"                data-endpoint="GETapi-v1-prices-filter-eia"
               value="All"
               data-component="body">
    <br>
<p>Producto a consultar Example: <code>All</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-areas-filter-eia">GET api/v1/areas/filter/eia</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-areas-filter-eia">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://fuelpricesapi.nelsoncarrero.dev/api/v1/areas/filter/eia" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://fuelpricesapi.nelsoncarrero.dev/api/v1/areas/filter/eia"
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

<span id="example-responses-GETapi-v1-areas-filter-eia">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;padd_5&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;padd_1&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;california&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;padd_1a&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;ohio&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;new_york_city&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;seattle&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;boston&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;washington&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;new_york&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;name&quot;: &quot;padd_2&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;name&quot;: &quot;padd_1b&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: &quot;denver&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;cleveland&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 16,
            &quot;name&quot;: &quot;padd_3&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 17,
            &quot;name&quot;: &quot;florida&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 18,
            &quot;name&quot;: &quot;colorado&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 19,
            &quot;name&quot;: &quot;padd_4&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 20,
            &quot;name&quot;: &quot;los_angeles&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 21,
            &quot;name&quot;: &quot;chicago&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 22,
            &quot;name&quot;: &quot;padd_5_except_california&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 23,
            &quot;name&quot;: &quot;minnesota&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 24,
            &quot;name&quot;: &quot;houston&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 25,
            &quot;name&quot;: &quot;texas&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 26,
            &quot;name&quot;: &quot;miami&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 27,
            &quot;name&quot;: &quot;san_francisco&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 28,
            &quot;name&quot;: &quot;padd_1c&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 29,
            &quot;name&quot;: &quot;massachusetts&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-areas-filter-eia" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-areas-filter-eia"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-areas-filter-eia"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-areas-filter-eia" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-areas-filter-eia">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-areas-filter-eia" data-method="GET"
      data-path="api/v1/areas/filter/eia"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-areas-filter-eia', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-areas-filter-eia"
                    onclick="tryItOut('GETapi-v1-areas-filter-eia');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-areas-filter-eia"
                    onclick="cancelTryOut('GETapi-v1-areas-filter-eia');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-areas-filter-eia"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/areas/filter/eia</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-areas-filter-eia"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-areas-filter-eia"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-products-filter-eia">GET api/v1/products/filter/eia</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-products-filter-eia">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://fuelpricesapi.nelsoncarrero.dev/api/v1/products/filter/eia" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://fuelpricesapi.nelsoncarrero.dev/api/v1/products/filter/eia"
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

<span id="example-responses-GETapi-v1-products-filter-eia">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;no_2_diesel_low_sulfur_015_ppm&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;no_2_diesel&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;conventional_regular_gasoline&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;reformulated_regular_gasoline&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;regular_gasoline&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;conventional_premium_gasoline&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;reformulated_premium_gasoline&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;premium_gasoline&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;gasoline_reformulated_midgrade&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;midgrade_gasoline&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;name&quot;: &quot;conventional_gasoline_no_oxy&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;name&quot;: &quot;reformulated_motor_gasoline&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: &quot;total_gasoline&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;gasoline_conventional_midgrade&quot;,
            &quot;created_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-08-18T16:29:20.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-products-filter-eia" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-products-filter-eia"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-products-filter-eia"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-products-filter-eia" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-products-filter-eia">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-products-filter-eia" data-method="GET"
      data-path="api/v1/products/filter/eia"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-products-filter-eia', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-products-filter-eia"
                    onclick="tryItOut('GETapi-v1-products-filter-eia');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-products-filter-eia"
                    onclick="cancelTryOut('GETapi-v1-products-filter-eia');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-products-filter-eia"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/products/filter/eia</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-products-filter-eia"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-products-filter-eia"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
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
