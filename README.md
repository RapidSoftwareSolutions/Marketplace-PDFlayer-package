[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/PDFlayer/functions?utm_source=RapidAPIGitHub_PDFlayerFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# PDFlayer Package
Connect to the PDFlayer API to create highly customizable PDFs from URLs & HTML. Test a PDFlayer API call in your browser and export the code into your app.
* Domain: pdflayer.com
* Credentials: accessKey

## How to get credentials: 
0. Sign up in [PDFlayer](https://pdflayer.com/product).
1. Navigate to [Dashboard page](https://pdflayer.com/dashboard)
2. Use Access Key as credentials.

## PDFlayer.getPdfFromUrl
Convert a site URL to a PDF document.

| Field      | Type       | Description
|------------|------------|----------
| accessKey  | credentials| Your API Access Key.
| documentUrl| String     | Full, including the HTTP Protocol, path to page you want to convert to a PDF documen.

## PDFlayer.getPdfFromHTML
Convert a site URL to a PDF document.

| Field       | Type       | Description
|-------------|------------|----------
| accessKey   | credentials| Your API Access Key.
| documentHtml| String     | raw HTML code you would like to convert to a PDF document.

