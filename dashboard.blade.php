<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="/theme/Dream/favicon.ico">
    <title>{{$title}}</title>
    <script defer src="/theme/Dream//js/chunk-vendors.js"></script>
    <script defer src="/theme/Dream/js/app.js"></script>
</head>
<body>
<div id="app"></div>
</body>
<script>
    window.setting = {
        ios: '{{$theme_config['ios']}}',
        android: '{{$theme_config['android']}}',
        mac: '{{$theme_config['mac']}}',
        windows: '{{$theme_config['windows']}}',
        logo: '{{$logo}}',
        title: '{{$title}}'
    };
</script>
{!! $theme_config['custom_html'] !!}
<script src="/theme/Dream/i18n/i18n.js"></script>
<script src="/theme/Dream/i18n/zh_CN.js"></script>
<script src="/theme/Dream/i18n/en.js"></script>
</html>
