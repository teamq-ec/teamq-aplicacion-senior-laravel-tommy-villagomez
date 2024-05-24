# Endpoints


## Return an empty response simply to trigger the storage of the CSRF cookie in the browser.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/sanctum/csrf-cookie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETsanctum-csrf-cookie" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsanctum-csrf-cookie"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsanctum-csrf-cookie"></code></pre>
</div>
<div id="execution-error-GETsanctum-csrf-cookie" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsanctum-csrf-cookie"></code></pre>
</div>
<form id="form-GETsanctum-csrf-cookie" data-method="GET" data-path="sanctum/csrf-cookie" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsanctum-csrf-cookie', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsanctum-csrf-cookie" onclick="tryItOut('GETsanctum-csrf-cookie');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsanctum-csrf-cookie" onclick="cancelTryOut('GETsanctum-csrf-cookie');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsanctum-csrf-cookie" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>sanctum/csrf-cookie</code></b>
</p>
</form>


## api/login




> Example request:

```bash
curl -X POST \
    "http://localhost/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</div>
<div id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</div>
<form id="form-POSTapi-login" data-method="POST" data-path="api/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-login" onclick="tryItOut('POSTapi-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-login" onclick="cancelTryOut('POSTapi-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/login</code></b>
</p>
</form>


## api/v1/movies/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/movies/corrupti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/movies/corrupti"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-movies--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-movies--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-movies--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-movies--id-"></code></pre>
</div>
<form id="form-GETapi-v1-movies--id-" data-method="GET" data-path="api/v1/movies/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-movies--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-movies--id-" onclick="tryItOut('GETapi-v1-movies--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-movies--id-" onclick="cancelTryOut('GETapi-v1-movies--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-movies--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/movies/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-movies--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/v1/movies




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/movies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/movies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-movies" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-movies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-movies"></code></pre>
</div>
<div id="execution-error-GETapi-v1-movies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-movies"></code></pre>
</div>
<form id="form-GETapi-v1-movies" data-method="GET" data-path="api/v1/movies" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-movies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-movies" onclick="tryItOut('GETapi-v1-movies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-movies" onclick="cancelTryOut('GETapi-v1-movies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-movies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/movies</code></b>
</p>
</form>


## api/v1/movies




> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/movies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"iste","description":"et","year":11}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/movies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "iste",
    "description": "et",
    "year": 11
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-movies" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-movies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-movies"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-movies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-movies"></code></pre>
</div>
<form id="form-POSTapi-v1-movies" data-method="POST" data-path="api/v1/movies" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-movies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-movies" onclick="tryItOut('POSTapi-v1-movies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-movies" onclick="cancelTryOut('POSTapi-v1-movies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-movies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/movies</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-v1-movies" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-v1-movies" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>year</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="year" data-endpoint="POSTapi-v1-movies" data-component="body" required  hidden>
<br>

</p>

</form>


## api/v1/movies/{id}




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/movies/possimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/movies/possimus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-movies--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-movies--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-movies--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-movies--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-movies--id-" data-method="DELETE" data-path="api/v1/movies/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-movies--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-movies--id-" onclick="tryItOut('DELETEapi-v1-movies--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-movies--id-" onclick="cancelTryOut('DELETEapi-v1-movies--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-movies--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/movies/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-movies--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/v1/movies/{id}




> Example request:

```bash
curl -X PATCH \
    "http://localhost/api/v1/movies/iste" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"ullam","description":"vel","year":4}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/movies/iste"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "ullam",
    "description": "vel",
    "year": 4
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PATCHapi-v1-movies--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-v1-movies--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-movies--id-"></code></pre>
</div>
<div id="execution-error-PATCHapi-v1-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-movies--id-"></code></pre>
</div>
<form id="form-PATCHapi-v1-movies--id-" data-method="PATCH" data-path="api/v1/movies/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-movies--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-v1-movies--id-" onclick="tryItOut('PATCHapi-v1-movies--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-v1-movies--id-" onclick="cancelTryOut('PATCHapi-v1-movies--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-v1-movies--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/movies/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PATCHapi-v1-movies--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PATCHapi-v1-movies--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="PATCHapi-v1-movies--id-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>year</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="year" data-endpoint="PATCHapi-v1-movies--id-" data-component="body" required  hidden>
<br>

</p>

</form>


## api/v1/movies/{id}




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/movies/enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"praesentium","description":"commodi","year":4}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/movies/enim"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "praesentium",
    "description": "commodi",
    "year": 4
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-movies--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-movies--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-movies--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-movies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-movies--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-movies--id-" data-method="PUT" data-path="api/v1/movies/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-movies--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-movies--id-" onclick="tryItOut('PUTapi-v1-movies--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-movies--id-" onclick="cancelTryOut('PUTapi-v1-movies--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-movies--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/movies/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-movies--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-v1-movies--id-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="PUTapi-v1-movies--id-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>year</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="year" data-endpoint="PUTapi-v1-movies--id-" data-component="body" required  hidden>
<br>

</p>

</form>


## api/v1/movies/{id}/images




> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/movies/aut/images" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/movies/aut/images"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-movies--id--images" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-movies--id--images"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-movies--id--images"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-movies--id--images" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-movies--id--images"></code></pre>
</div>
<form id="form-POSTapi-v1-movies--id--images" data-method="POST" data-path="api/v1/movies/{id}/images" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-movies--id--images', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-movies--id--images" onclick="tryItOut('POSTapi-v1-movies--id--images');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-movies--id--images" onclick="cancelTryOut('POSTapi-v1-movies--id--images');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-movies--id--images" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/movies/{id}/images</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-v1-movies--id--images" data-component="url" required  hidden>
<br>

</p>
</form>


## api/v1/movies/{id}/images




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/movies/sed/images" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/movies/sed/images"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-movies--id--images" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-movies--id--images"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-movies--id--images"></code></pre>
</div>
<div id="execution-error-GETapi-v1-movies--id--images" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-movies--id--images"></code></pre>
</div>
<form id="form-GETapi-v1-movies--id--images" data-method="GET" data-path="api/v1/movies/{id}/images" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-movies--id--images', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-movies--id--images" onclick="tryItOut('GETapi-v1-movies--id--images');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-movies--id--images" onclick="cancelTryOut('GETapi-v1-movies--id--images');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-movies--id--images" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/movies/{id}/images</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-movies--id--images" data-component="url" required  hidden>
<br>

</p>
</form>


## api/v1/movies/{id}/images/{imageId}




> Example request:

```bash
curl -X PATCH \
    "http://localhost/api/v1/movies/quaerat/images/neque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/movies/quaerat/images/neque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PATCH",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PATCHapi-v1-movies--id--images--imageId-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-v1-movies--id--images--imageId-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-movies--id--images--imageId-"></code></pre>
</div>
<div id="execution-error-PATCHapi-v1-movies--id--images--imageId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-movies--id--images--imageId-"></code></pre>
</div>
<form id="form-PATCHapi-v1-movies--id--images--imageId-" data-method="PATCH" data-path="api/v1/movies/{id}/images/{imageId}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-movies--id--images--imageId-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-v1-movies--id--images--imageId-" onclick="tryItOut('PATCHapi-v1-movies--id--images--imageId-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-v1-movies--id--images--imageId-" onclick="cancelTryOut('PATCHapi-v1-movies--id--images--imageId-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-v1-movies--id--images--imageId-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/movies/{id}/images/{imageId}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PATCHapi-v1-movies--id--images--imageId-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>imageId</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="imageId" data-endpoint="PATCHapi-v1-movies--id--images--imageId-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/v1/users




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Miss Maryam Marks",
            "email": "grogahn@example.net",
            "created_at": "2024-05-15T18:42:41.000000Z",
            "updated_at": "2024-05-15T18:42:41.000000Z"
        },
        {
            "id": 2,
            "name": "Cortney Blanda",
            "email": "raphaelle66@example.com",
            "created_at": "2024-05-15T18:42:41.000000Z",
            "updated_at": "2024-05-15T18:42:41.000000Z"
        },
        {
            "id": 3,
            "name": "Dr. Jules Stiedemann PhD",
            "email": "lillie43@example.net",
            "created_at": "2024-05-15T18:42:41.000000Z",
            "updated_at": "2024-05-15T18:42:41.000000Z"
        },
        {
            "id": 4,
            "name": "Mrs. Nadia Davis",
            "email": "faustino09@example.com",
            "created_at": "2024-05-15T18:42:41.000000Z",
            "updated_at": "2024-05-15T18:42:41.000000Z"
        },
        {
            "id": 5,
            "name": "Verla Wehner",
            "email": "ojerde@example.org",
            "created_at": "2024-05-15T18:42:41.000000Z",
            "updated_at": "2024-05-15T18:42:41.000000Z"
        },
        {
            "id": 6,
            "name": "Sister Marquardt MD",
            "email": "nkertzmann@example.com",
            "created_at": "2024-05-15T18:42:41.000000Z",
            "updated_at": "2024-05-15T18:42:41.000000Z"
        },
        {
            "id": 7,
            "name": "Peter Frami I",
            "email": "cartwright.albina@example.org",
            "created_at": "2024-05-15T18:42:41.000000Z",
            "updated_at": "2024-05-15T18:42:41.000000Z"
        },
        {
            "id": 8,
            "name": "Kattie Stroman",
            "email": "dusty.schuster@example.org",
            "created_at": "2024-05-15T18:42:41.000000Z",
            "updated_at": "2024-05-15T18:42:41.000000Z"
        },
        {
            "id": 9,
            "name": "Lorena Ebert",
            "email": "abdiel71@example.net",
            "created_at": "2024-05-15T18:42:41.000000Z",
            "updated_at": "2024-05-15T18:42:41.000000Z"
        },
        {
            "id": 10,
            "name": "Ora Keeling",
            "email": "dkiehn@example.org",
            "created_at": "2024-05-15T18:42:41.000000Z",
            "updated_at": "2024-05-15T18:42:41.000000Z"
        },
        {
            "id": 11,
            "name": "tommy villagomez",
            "email": "tommyjoel20@gmail.com",
            "created_at": "2024-05-22T22:17:56.000000Z",
            "updated_at": "2024-05-22T22:17:56.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/users?page=1",
        "last": "http:\/\/localhost\/api\/v1\/users?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/users?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/users",
        "per_page": 15,
        "to": 11,
        "total": 11
    }
}
```
<div id="execution-results-GETapi-v1-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users"></code></pre>
</div>
<div id="execution-error-GETapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users"></code></pre>
</div>
<form id="form-GETapi-v1-users" data-method="GET" data-path="api/v1/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-users" onclick="tryItOut('GETapi-v1-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-users" onclick="cancelTryOut('GETapi-v1-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/users</code></b>
</p>
</form>


## api/v1/users/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/users/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/users/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "User not found"
}
```
<div id="execution-results-GETapi-v1-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users--id-"></code></pre>
</div>
<form id="form-GETapi-v1-users--id-" data-method="GET" data-path="api/v1/users/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-users--id-" onclick="tryItOut('GETapi-v1-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-users--id-" onclick="cancelTryOut('GETapi-v1-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/users/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-users--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/v1/users




> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-users" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-users"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-users"></code></pre>
</div>
<form id="form-POSTapi-v1-users" data-method="POST" data-path="api/v1/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-users" onclick="tryItOut('POSTapi-v1-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-users" onclick="cancelTryOut('POSTapi-v1-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/users</code></b>
</p>
</form>


## api/v1/users/{id}




> Example request:

```bash
curl -X PATCH \
    "http://localhost/api/v1/users/sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/users/sunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PATCH",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PATCHapi-v1-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-v1-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-users--id-"></code></pre>
</div>
<div id="execution-error-PATCHapi-v1-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-users--id-"></code></pre>
</div>
<form id="form-PATCHapi-v1-users--id-" data-method="PATCH" data-path="api/v1/users/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-v1-users--id-" onclick="tryItOut('PATCHapi-v1-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-v1-users--id-" onclick="cancelTryOut('PATCHapi-v1-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-v1-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/users/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PATCHapi-v1-users--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/v1/users/{id}




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/users/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/users/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-users--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-users--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-users--id-" data-method="DELETE" data-path="api/v1/users/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-users--id-" onclick="tryItOut('DELETEapi-v1-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-users--id-" onclick="cancelTryOut('DELETEapi-v1-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/users/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-users--id-" data-component="url" required  hidden>
<br>

</p>
</form>



