<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Advertisement || {{ URL::to('/') }}</title>
        <style>
        body {
          margin: 0;
          padding: 0;
          overflow: hidden;
        }

        iframe {
          width: 100%;
          height: 100%;
          margin: 0;
          padding: 0;
          border: none;
          overflow: hidden;
          position: absolute;
          top: 0;
          left: 0;
          bottom: 0;
          right: 0;
        }
        </style>
    </head>
    <body>
        <iframe src="{{ $link }}"></iframe>
    </body>
</html>
