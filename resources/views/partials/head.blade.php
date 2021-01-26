<head>
    <meta charset="utf-8">
    <title>{{ $title }} - Andrew Schmelyun</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="{{ $description ?? '' }}" />
    <meta property="og:url" content="https://aschmelyun.com/" />
    <meta property="og:site_name" content="Andrew Schmelyun" />
    <meta property="og:image" content="https://aschmelyun.com/assets/images/meta{{ $path === '/' ? '/index' : $path }}.jpg" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="{{ $description ?? '' }}" />
    <meta name="twitter:title" content="{{ $title }}" />
    <meta name="twitter:site" content="@aschmelyun" />
    <meta name="twitter:image" content="https://aschmelyun.com/assets/images/meta{{ $path === '/' ? '/index' : $path }}.jpg" />

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <meta name="theme-color" content="#1a202c">

    <link rel="stylesheet" type="text/css" href="{{ $mix['/assets/css/app.css'] }}">
</head>