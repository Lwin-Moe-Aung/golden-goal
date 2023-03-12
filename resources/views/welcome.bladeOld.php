@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <base href="/">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Copy of Tech Tech Website in Teal White Navy Gradients Style</title>
    <meta name="description" content="" />
    <link rel="icon" href="26387fa4f5b1e3f7b6217b27d79bf264.png" type="image/png" sizes="16x16">
    <link rel="icon" href="2d0b56e7e51cf11036ad8734bdb67e2d.png" type="image/png" sizes="32x32">
    <link rel="apple-touch-icon" href="725b756a69a7d4c235070e51acd85560.png" sizes="180x180">

    <link rel="shortcut icon" href="/css/favicon.ico">
    <link rel="stylesheet" href="/css/vendor.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type=text/css href="/css/layerslider.css">
  <style>
    :root {
      --ffsd: 0px;
      --1vw: calc((100vw - var(--sbw, 0px)) / 100);
    }

    @media (prefers-reduced-motion: reduce) {
      .animated {
        animation: none !important;
      }
    }

    @media not all and (min-resolution:.001dpcm) {
      @media {
        :root {
          --ffsd: 0.5px;
        }
      }
    }

    html {
      zoom: var(--rzf, 1);
      font-size: max(calc(min(var(--1vw, 1vw), 13.66px) * var(--rfso, 1)), var(--minfs, 0px));
      -webkit-text-size-adjust: 100%;
      scroll-behavior: smooth;
    }

    body {
      font-size: calc(1rem * var(--bfso, 1));
    }

    body,
    html,
    p,
    ul,
    ol,
    li {
      margin: 0;
      padding: 0;
      font-synthesis: none;
      font-kerning: none;
      font-variant-ligatures: none;
      font-feature-settings: "kern" 0, "calt" 0, "liga" 0, "clig" 0, "dlig" 0, "hlig" 0;
      font-family: unset;
      -webkit-font-smoothing: subpixel-antialiased;
      -moz-osx-font-smoothing: grayscale;
      text-rendering: geometricprecision;
      white-space: normal;
    }

    li {
      text-align: unset;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/fcd349140b0dbb75604bd51fdc02e2e8.woff2);
      font-weight: 400;
      font-style: normal;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/9c2c6aa6700c787262c247c3d2dfbde9.woff2);
      font-weight: 700;
      font-style: normal;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/9bbf2fffa99d94b7e27016415f17c7ec.woff2);
      font-weight: 400;
      font-style: italic;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/5f24b9e22c07041c173bb31969997c11.woff2);
      font-weight: 700;
      font-style: italic;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/fcd349140b0dbb75604bd51fdc02e2e8.woff2);
      font-weight: 100;
      font-style: normal;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/9bbf2fffa99d94b7e27016415f17c7ec.woff2);
      font-weight: 100;
      font-style: italic;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/fcd349140b0dbb75604bd51fdc02e2e8.woff2);
      font-weight: 200;
      font-style: normal;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/9bbf2fffa99d94b7e27016415f17c7ec.woff2);
      font-weight: 200;
      font-style: italic;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/fcd349140b0dbb75604bd51fdc02e2e8.woff2);
      font-weight: 300;
      font-style: normal;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/9bbf2fffa99d94b7e27016415f17c7ec.woff2);
      font-weight: 300;
      font-style: italic;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/fcd349140b0dbb75604bd51fdc02e2e8.woff2);
      font-weight: 500;
      font-style: normal;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/9bbf2fffa99d94b7e27016415f17c7ec.woff2);
      font-weight: 500;
      font-style: italic;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/9c2c6aa6700c787262c247c3d2dfbde9.woff2);
      font-weight: 600;
      font-style: normal;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/5f24b9e22c07041c173bb31969997c11.woff2);
      font-weight: 600;
      font-style: italic;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/9c2c6aa6700c787262c247c3d2dfbde9.woff2);
      font-weight: 800;
      font-style: normal;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/5f24b9e22c07041c173bb31969997c11.woff2);
      font-weight: 800;
      font-style: italic;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/9c2c6aa6700c787262c247c3d2dfbde9.woff2);
      font-weight: 900;
      font-style: normal;
    }

    @font-face {
      font-family: YAEnXHTFXhg-0;
      src: url(fonts/5f24b9e22c07041c173bb31969997c11.woff2);
      font-weight: 900;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/3dae3800fab4aad097008bba4dfa94c1.woff2);
      font-weight: 400;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/71d66fa3f70c070b9427b4baf1980061.woff2);
      font-weight: 700;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/0f51da86a058aef1bb585a64cf664ab7.woff2);
      font-weight: 400;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/1aaf8c95b881644a76961b6db0059fc0.woff2);
      font-weight: 700;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/3dae3800fab4aad097008bba4dfa94c1.woff2);
      font-weight: 100;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/0f51da86a058aef1bb585a64cf664ab7.woff2);
      font-weight: 100;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/3dae3800fab4aad097008bba4dfa94c1.woff2);
      font-weight: 200;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/0f51da86a058aef1bb585a64cf664ab7.woff2);
      font-weight: 200;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/3dae3800fab4aad097008bba4dfa94c1.woff2);
      font-weight: 300;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/0f51da86a058aef1bb585a64cf664ab7.woff2);
      font-weight: 300;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/3dae3800fab4aad097008bba4dfa94c1.woff2);
      font-weight: 500;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/0f51da86a058aef1bb585a64cf664ab7.woff2);
      font-weight: 500;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/71d66fa3f70c070b9427b4baf1980061.woff2);
      font-weight: 600;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/1aaf8c95b881644a76961b6db0059fc0.woff2);
      font-weight: 600;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/71d66fa3f70c070b9427b4baf1980061.woff2);
      font-weight: 800;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/1aaf8c95b881644a76961b6db0059fc0.woff2);
      font-weight: 800;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/71d66fa3f70c070b9427b4baf1980061.woff2);
      font-weight: 900;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cUi3FOQ-0;
      src: url(fonts/1aaf8c95b881644a76961b6db0059fc0.woff2);
      font-weight: 900;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/22ff9d894b6467b3ddab0f1989a2cb4d.woff2);
      font-weight: 400;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/6f953f3e7ac9d894a97d59a06afcfa7b.woff2);
      font-weight: 700;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/aeba314cd216c72b97019a6e8c17c9a5.woff2);
      font-weight: 400;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/b146a0e8f0e873592940bcc60a355c0c.woff2);
      font-weight: 700;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/22ff9d894b6467b3ddab0f1989a2cb4d.woff2);
      font-weight: 100;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/aeba314cd216c72b97019a6e8c17c9a5.woff2);
      font-weight: 100;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/22ff9d894b6467b3ddab0f1989a2cb4d.woff2);
      font-weight: 200;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/aeba314cd216c72b97019a6e8c17c9a5.woff2);
      font-weight: 200;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/22ff9d894b6467b3ddab0f1989a2cb4d.woff2);
      font-weight: 300;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/aeba314cd216c72b97019a6e8c17c9a5.woff2);
      font-weight: 300;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/22ff9d894b6467b3ddab0f1989a2cb4d.woff2);
      font-weight: 500;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/aeba314cd216c72b97019a6e8c17c9a5.woff2);
      font-weight: 500;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/6f953f3e7ac9d894a97d59a06afcfa7b.woff2);
      font-weight: 600;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/b146a0e8f0e873592940bcc60a355c0c.woff2);
      font-weight: 600;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/6f953f3e7ac9d894a97d59a06afcfa7b.woff2);
      font-weight: 800;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/b146a0e8f0e873592940bcc60a355c0c.woff2);
      font-weight: 800;
      font-style: italic;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/6f953f3e7ac9d894a97d59a06afcfa7b.woff2);
      font-weight: 900;
      font-style: normal;
    }

    @font-face {
      font-family: YAD_cQGyXdk-0;
      src: url(fonts/b146a0e8f0e873592940bcc60a355c0c.woff2);
      font-weight: 900;
      font-style: italic;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/8f7934b3d45567e9cf1f541e008969a9.woff2);
      font-weight: 400;
      font-style: normal;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/9340013c7d177c83df1edab0cf96ac10.woff2);
      font-weight: 700;
      font-style: normal;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/e005df7c7c34fefde116ba9b5a0e51e1.woff2);
      font-weight: 400;
      font-style: italic;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/83b37f2dcbb18c810da7cfa915708210.woff2);
      font-weight: 700;
      font-style: italic;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/8f7934b3d45567e9cf1f541e008969a9.woff2);
      font-weight: 100;
      font-style: normal;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/e005df7c7c34fefde116ba9b5a0e51e1.woff2);
      font-weight: 100;
      font-style: italic;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/8f7934b3d45567e9cf1f541e008969a9.woff2);
      font-weight: 200;
      font-style: normal;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/e005df7c7c34fefde116ba9b5a0e51e1.woff2);
      font-weight: 200;
      font-style: italic;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/8f7934b3d45567e9cf1f541e008969a9.woff2);
      font-weight: 300;
      font-style: normal;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/e005df7c7c34fefde116ba9b5a0e51e1.woff2);
      font-weight: 300;
      font-style: italic;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/8f7934b3d45567e9cf1f541e008969a9.woff2);
      font-weight: 500;
      font-style: normal;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/e005df7c7c34fefde116ba9b5a0e51e1.woff2);
      font-weight: 500;
      font-style: italic;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/9340013c7d177c83df1edab0cf96ac10.woff2);
      font-weight: 600;
      font-style: normal;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/83b37f2dcbb18c810da7cfa915708210.woff2);
      font-weight: 600;
      font-style: italic;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/9340013c7d177c83df1edab0cf96ac10.woff2);
      font-weight: 800;
      font-style: normal;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/83b37f2dcbb18c810da7cfa915708210.woff2);
      font-weight: 800;
      font-style: italic;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/9340013c7d177c83df1edab0cf96ac10.woff2);
      font-weight: 900;
      font-style: normal;
    }

    @font-face {
      font-family: YAD1aU3sLnI-0;
      src: url(fonts/83b37f2dcbb18c810da7cfa915708210.woff2);
      font-weight: 900;
      font-style: italic;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/f8f199f09526f79e87644ed227e0f651.woff2);
      font-weight: 400;
      font-style: normal;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/98c4d2c0223fc8474641c77f923528e9.woff2);
      font-weight: 700;
      font-style: normal;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/d257a7100844bc3f98c9021168b6249e.woff2);
      font-weight: 400;
      font-style: italic;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/1060345c54d396e76d73f1da7ee200bd.woff2);
      font-weight: 700;
      font-style: italic;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/f8f199f09526f79e87644ed227e0f651.woff2);
      font-weight: 100;
      font-style: normal;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/d257a7100844bc3f98c9021168b6249e.woff2);
      font-weight: 100;
      font-style: italic;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/f8f199f09526f79e87644ed227e0f651.woff2);
      font-weight: 200;
      font-style: normal;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/d257a7100844bc3f98c9021168b6249e.woff2);
      font-weight: 200;
      font-style: italic;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/f8f199f09526f79e87644ed227e0f651.woff2);
      font-weight: 300;
      font-style: normal;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/d257a7100844bc3f98c9021168b6249e.woff2);
      font-weight: 300;
      font-style: italic;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/f8f199f09526f79e87644ed227e0f651.woff2);
      font-weight: 500;
      font-style: normal;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/d257a7100844bc3f98c9021168b6249e.woff2);
      font-weight: 500;
      font-style: italic;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/98c4d2c0223fc8474641c77f923528e9.woff2);
      font-weight: 600;
      font-style: normal;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/1060345c54d396e76d73f1da7ee200bd.woff2);
      font-weight: 600;
      font-style: italic;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/98c4d2c0223fc8474641c77f923528e9.woff2);
      font-weight: 800;
      font-style: normal;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/1060345c54d396e76d73f1da7ee200bd.woff2);
      font-weight: 800;
      font-style: italic;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/98c4d2c0223fc8474641c77f923528e9.woff2);
      font-weight: 900;
      font-style: normal;
    }

    @font-face {
      font-family: YACgEZ1cb1Q-0;
      src: url(fonts/1060345c54d396e76d73f1da7ee200bd.woff2);
      font-weight: 900;
      font-style: italic;
    }

    @media (max-width: 375px) {
      #V1PkVSJklNjNwezR {
        grid-area: 2 / 2 / 4 / 4;
      }

      #r7vMN3Xx0kj8k2IH {
        margin-left: -1.02698078%;
        clip-path: polygon(calc(1.00631152% + 0%) calc((0.00556612 * 394.06811293rem) + 0%), calc(100% - (1.00631152% + 0%)) calc((0.00556612 * 394.06811293rem) + 0%), calc(100% - (1.00631152% + 0%)) calc(100% - ((0.00556612 * 394.06811293rem) + 0%)), calc(1.00631152% + 0%) calc(100% - ((0.00556612 * 394.06811293rem) + 0%)));
        margin-top: -0.55661177%;
        margin-bottom: -0.55661177%;
        grid-area: 3 / 3 / 5 / 5;
        margin-right: -1.02698078%;
      }

      #XYGJy2jmn2zLu1UL {
        grid-template-columns: 0 0 394.06811293% 0;
        left: -147.03405647%;
        grid-template-rows: 0 0 100% 0;
      }

      #tfT6yyPb1ZV1d9se {
        grid-area: 2 / 2 / 5 / 3;
      }

      #T8oldhrmylbPLWbc {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.26666667em - var(--ffsd)));
      }

      #BavEe7O215xM5qzQ {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.26666667em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.26666667em) * -0.05);
      }

      #yIPeyou0JDxQXCdz {
        min-width: 50.02892562rem;
      }

      #QqxdLod3szIO71dV {
        grid-area: 3 / 4 / 4 / 5;
      }

      #unapl4vsnFc9yPsN {
        grid-template-columns: 0 7.51862296rem 4.78550483rem 49.89559229rem;
        grid-template-rows: 0 minmax(2.42606319rem, max-content) minmax(10.24rem, max-content) minmax(2.42606319rem, max-content);
        grid-area: 2 / 3 / 3 / 6;
      }

      #vwyAQYfZVZRL5z6z {
        grid-area: 2 / 3 / 3 / 6;
      }

      #Q4df3GZJrZ51IXjK {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(13.07477563em - var(--ffsd)));
      }

      #JWKnk5WEUL0CTval {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 13.07477563em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 13.07477563em) * 0.05);
      }

      #sGGSsRQl19Yu8XHn {
        min-width: 91.6rem;
      }

      #wOLfb0jH9BTxG4yx {
        grid-area: 4 / 4 / 5 / 9;
      }

      #MYBMSLPxXz5pfuz1 {
        grid-area: 2 / 2 / 5 / 5;
      }

      #FD05YrJEyDGvbuWI {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(6.38768em - var(--ffsd)));
      }

      #kvNVd7MeEhqbwd9q {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 6.38768em) * 0.1);
      }

      #nWXLDGwPaZTckdiu {
        min-width: 88.80121413rem;
      }

      #MjwwCMUDU9FSXyaP {
        grid-area: 3 / 3 / 4 / 4;
      }

      #kB1woNSaTg7J7n0Q {
        grid-template-columns: 0 1.06666667rem 88.6678808rem 1.06666667rem;
        grid-template-rows: 0 minmax(1.06666667rem, max-content) minmax(15.38079339rem, max-content) minmax(1.06666667rem, max-content);
      }

      #eg75sqrZoYR01tzO {
        grid-template-columns: 0 90.80121413rem;
        grid-template-rows: 0 minmax(17.51412672rem, max-content);
        grid-area: 6 / 5 / 7 / 7;
      }

      #iI6EKIHWr4zPPhxU {
        grid-area: 6 / 5 / 7 / 7;
      }

      #DCPfcD9PThZmbqWt {
        grid-area: 2 / 2 / 7 / 7;
      }

      #G0zLjOsXU7kDtfAT {
        grid-area: 2 / 2 / 7 / 7;
      }

      #hWUU6SVK721sC3IZ {
        grid-area: 3 / 3 / 5 / 4;
      }

      #OKGpBJexAmp9oE74 {
        font-size: max(0px, calc(2.94908542em - var(--ffsd)));
      }

      #kfmLqOmvtD9Dhgus {
        font-size: max(0px, calc(2.94908542em - var(--ffsd)));
      }

      #xvtGfSYKiAxKiWM5 {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(0px, 2.94908542em) * 0.05);
      }

      #bcGNc4zpjJ1e5Gcu {
        min-width: 21.04802134rem;
      }

      #WMHh43EoIXRfqJ5f {
        grid-area: 4 / 5 / 6 / 6;
      }

      #A0T5EBm235zwQ00p {
        grid-template-columns: 0 2.29709225rem 5.7194122rem 2.3451965rem 20.91468801rem 3.10261211rem;
        grid-template-rows: 0 minmax(1.974284rem, max-content) minmax(0.1814812rem, max-content) minmax(6.46899811rem, max-content) minmax(0.29118821rem, max-content) minmax(2.1557652rem, max-content);
      }

      #Ybiycu5KGDu4sVSM {
        grid-area: 2 / 2 / 7 / 7;
      }

      #SKzyVpcY3vmuLH6M {
        grid-area: 4 / 3 / 5 / 4;
      }

      #V4RiPa246S53Tecs {
        font-size: max(0px, calc(2.94908542em - var(--ffsd)));
      }

      #ytyB6EoLIADnw05m {
        font-size: max(0px, calc(2.94908542em - var(--ffsd)));
      }

      #XFkGj050kKhxTQeY {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(0px, 2.94908542em) * 0.05);
      }

      #dLHkhTV2wQWxNTSo {
        min-width: 21.04802134rem;
      }

      #qNqUZ3sU2sipgESZ {
        grid-area: 3 / 5 / 6 / 6;
      }

      #gNpfPXxzNa5gPVsu {
        grid-template-columns: 0 3.10261211rem 5.54879652rem 1.71029231rem 20.91468801rem 3.10261211rem;
        grid-template-rows: 0 minmax(2.1557652rem, max-content) minmax(0.29118821rem, max-content) minmax(6.17780989rem, max-content) minmax(0.29118821rem, max-content) minmax(2.1557652rem, max-content);
      }

      #PUVfIJMM631qA3Y3 {
        grid-template-columns: 0 2.12880749rem 0 34.37900106rem 0 54.95885811rem;
        grid-template-rows: 0 minmax(61.85862026rem, max-content) minmax(11.07171672rem, max-content) minmax(2.77013412rem, max-content) minmax(11.07171672rem, max-content) minmax(4.69447883rem, max-content);
      }

      #SAI6BBGmVYGDQt1c {
        grid-area: 2 / 3 / 5 / 4;
      }

      #nLAzXlr1bzrAm8YR {
        grid-template-columns: 0 19.31830802rem 52.83005063rem 19.31830802rem;
        grid-template-rows: 0 minmax(5.27346189rem, max-content) minmax(91.46666666rem, max-content) minmax(7.79320477rem, max-content);
        grid-area: 8 / 2 / 9 / 8;
      }

      #LarSXPHokbk2xrCp {
        grid-area: 8 / 2 / 9 / 8;
      }

      #ilgtogNyHpvKkL8t {
        grid-template-columns: 4.26666667rem 0 0 0 62.19972007rem 28.60149406rem 0.66545254rem 0 4.26666667rem;
        grid-template-rows: minmax(6.4rem, max-content) minmax(15.09212637rem, max-content) minmax(17.10992761rem, max-content) minmax(30.0441546rem, max-content) minmax(18.06146368rem, max-content) minmax(17.51412672rem, max-content) minmax(6.4rem, max-content) minmax(104.53333333rem, max-content) minmax(6.4rem, max-content);
      }

      #home {
        min-height: 15.02188339vh;
      }

      #YZZMOPq5rNpb7QCk {
        grid-area: 2 / 2 / 3 / 3;
      }

      #IO7F62or5XVGkuQW {
        grid-template-columns: 0 364.26666667%;
        left: -132.13333333%;
        grid-template-rows: 0 100%;
      }

      #EmNxSBqrUi8bFcwv {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(12.87609013em - var(--ffsd)));
      }

      #fXpPkNxuVTo02ZMi {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 12.87609013em) * 0.045);
      }

      #C3ZjmOA5zLmTvu1Y {
        min-width: 91.6rem;
      }

      #YWLUDDpnPevptUDU {
        grid-area: 2 / 2 / 3 / 6;
      }

      #DxNX2e9M3t7apqoR {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.55110933em - var(--ffsd)));
      }

      #lyCt6EK37OU9rAcz {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.55110933em) * -0.15);
      }

      #rqEhnPH2xfPMqRX2 {
        min-width: 91.6rem;
      }

      #bHCDSflBLaOvSWBI {
        grid-area: 4 / 3 / 5 / 7;
      }

      #BfwUqEZh95gLLu8l {
        grid-area: 2 / 2 / 4 / 5;
      }

      #smrqivlevH9YdFxA {
        grid-area: 3 / 3 / 5 / 4;
      }

      #CQTUwGBM7FuGM1Um {
        grid-template-columns: 0 55.96350986rem 33.82354182rem 1.67961497rem;
        grid-template-rows: 0 minmax(48.80071546rem, max-content) minmax(33.88515118rem, max-content) 0;
        grid-area: 6 / 4 / 7 / 5;
      }

      #cdwSjqqOEBCoUrOf {
        grid-area: 6 / 4 / 7 / 5;
      }

      #NXqjaFCpzaOOtdPU {
        grid-template-columns: 4.26666667rem 0 0.00000001rem 91.46666665rem 0.00000001rem 0 4.26666667rem;
        grid-template-rows: minmax(18.70498281rem, max-content) minmax(29.44024774rem, max-content) minmax(10.07628464rem, max-content) minmax(38.78763535rem, max-content) minmax(6.4rem, max-content) minmax(82.68586665rem, max-content) minmax(18.70498281rem, max-content);
      }

      #about {
        min-height: 13.88585173vh;
      }

      #y0xdiF8Gd8AYedtf {
        grid-area: 2 / 2 / 3 / 3;
      }

      #E1SM9jAHpWgnkuEN {
        grid-template-columns: 0 515.16356658%;
        left: -207.58178329%;
        grid-template-rows: 0 100%;
      }

      #MGrHmHL1Ak6ngcrA {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(12.96684815em - var(--ffsd)));
      }

      #tOhYscnGCWArdh1C {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 12.96684815em) * 0.045);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 12.96684815em) * 0.045);
      }

      #zIsf8m6Lnzsm2uob {
        min-width: 91.6rem;
      }

      #Vjxi9enmN4GKXvjU {
        grid-area: 2 / 2 / 3 / 6;
      }

      #OZu3bZzneaGtLHwR {
        display: none;
      }

      #Gen2kkyU64l8vpFu {
        display: block;
      }

      #Mwc8GSrJOgnXfRM6 {
        grid-area: 2 / 2 / 7 / 7;
      }

      #tvczyqODUZGkxznJ {
        grid-area: 2 / 2 / 5 / 5;
      }

      #RcH6wUArHfuJ8sXl {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.68888em - var(--ffsd)));
      }

      #MT3EMpvTUaYvOeN0 {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.05);
      }

      #BrQmGSUIyw3kRSIl {
        min-width: 6.43125rem;
      }

      #F6jnuoMur73zkQOk {
        grid-area: 3 / 3 / 4 / 4;
      }

      #KCRRsM9AKpvwQmhT {
        grid-template-columns: 0 4.74611211rem 6.29791667rem 4.74611211rem;
        grid-template-rows: 0 minmax(4.57951444rem, max-content) minmax(6.631112rem, max-content) minmax(4.57951444rem, max-content);
      }

      #VSPZrwey5ta2PsRK {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.19276291em - var(--ffsd)));
      }

      #FwnhbEOBFWPfZADY {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.19276291em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.19276291em) * -0.05);
      }

      #FSpu6gxGdAWnZAZT {
        min-width: 78.8rem;
      }

      #qk0ICm39BL3jlBT3 {
        grid-area: 5 / 3 / 6 / 6;
      }

      #COxdKC2a8KiczNgu {
        grid-template-columns: 0 6.4rem 0 15.79014088rem 62.87652579rem 6.4rem;
        grid-template-rows: 0 minmax(12.31946124rem, max-content) minmax(15.79014088rem, max-content) minmax(11.13280933rem, max-content) minmax(19.19711859rem, max-content) minmax(6.4rem, max-content);
      }

      #ROE8mWEsRK3HhzmT {
        grid-template-columns: 0 91.46666667rem;
        grid-template-rows: 0 minmax(64.83953005rem, max-content);
        grid-area: 4 / 3 / 5 / 7;
      }

      #BRpQnQIlxbOgdkxB {
        grid-area: 4 / 3 / 5 / 7;
      }

      #xY4x0yK7QGzXENti {
        display: none;
      }

      #XOvAWaF962YJaLYi {
        display: block;
      }

      #IRflFs60Z6IkegYO {
        grid-area: 2 / 2 / 7 / 7;
      }

      #QKr52SEnpCeSumKk {
        grid-area: 2 / 2 / 5 / 5;
      }

      #GIgokzRGzuQ5vwPb {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.68888em - var(--ffsd)));
      }

      #LR8FtwqsgUwTynw7 {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.05);
      }

      #WmyHRLRMhLm5xAfE {
        min-width: 9.07939384rem;
      }

      #N7pAvJj1PFRyXOvl {
        grid-area: 3 / 3 / 4 / 4;
      }

      #JHXUPsoXENtzUvZZ {
        grid-template-columns: 0 3.42204019rem 8.9460605rem 3.42204019rem;
        grid-template-rows: 0 minmax(4.57951444rem, max-content) minmax(6.631112rem, max-content) minmax(4.57951444rem, max-content);
      }

      #KhSgB0wHQxHLNVJH {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.31480528em - var(--ffsd)));
      }

      #aSEd131TVZSH343o {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.31480528em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.31480528em) * -0.05);
      }

      #EqYCjgD3Dznoc9Fi {
        min-width: 78.8rem;
      }

      #cfG6CdAXhSAVwrOE {
        grid-area: 5 / 3 / 6 / 6;
      }

      #uNWkFl1h7Kx88bUO {
        grid-template-columns: 0 6.4rem 0 15.79014088rem 62.87652579rem 6.4rem;
        grid-template-rows: 0 minmax(12.31946124rem, max-content) minmax(15.79014088rem, max-content) minmax(11.13280933rem, max-content) minmax(19.6482969rem, max-content) minmax(6.4rem, max-content);
      }

      #bcfWdUD1lDoDHeTG {
        grid-template-columns: 0 91.46666667rem;
        grid-template-rows: 0 minmax(65.29070836rem, max-content);
        grid-area: 6 / 4 / 7 / 8;
      }

      #QHtE4ZDOQr1grhXf {
        grid-area: 6 / 4 / 7 / 8;
      }

      #RogP5gSzgTNO2Mvk {
        display: none;
      }

      #FqaL5HhvuaqKYEpU {
        display: block;
      }

      #hLvDrJoBo1vXNtbI {
        grid-area: 2 / 2 / 7 / 7;
      }

      #DsOY97bDsNYtojnA {
        grid-area: 2 / 2 / 5 / 5;
      }

      #Lzd6TiKVutnhnweZ {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.68888em - var(--ffsd)));
      }

      #QHaAhPno4VSbeyhq {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.05);
      }

      #sADlAHndSmaPdnPL {
        min-width: 9.07939384rem;
      }

      #FO7HqEAUZD26skhq {
        grid-area: 3 / 3 / 4 / 4;
      }

      #Qlad3DMmujstOt3B {
        grid-template-columns: 0 3.42204019rem 8.9460605rem 3.42204019rem;
        grid-template-rows: 0 minmax(4.57951444rem, max-content) minmax(6.631112rem, max-content) minmax(4.57951444rem, max-content);
      }

      #tEYMpNJpB7liYEWd {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.50901798em - var(--ffsd)));
      }

      #F7SLL6FeLL2XltMA {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.50901798em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.50901798em) * -0.05);
      }

      #adcVNXMIKHgyhdy1 {
        min-width: 78.8rem;
      }

      #kLAiTL7PBno2WmOc {
        grid-area: 5 / 3 / 6 / 6;
      }

      #o37c4mED4DturuXU {
        grid-template-columns: 0 6.4rem 0 15.79014088rem 62.87652579rem 6.4rem;
        grid-template-rows: 0 minmax(12.31946124rem, max-content) minmax(15.79014088rem, max-content) minmax(11.13280933rem, max-content) minmax(20.36628156rem, max-content) minmax(6.4rem, max-content);
      }

      #ZCzeiv9LaKupDtu5 {
        grid-template-columns: 0 91.46666667rem;
        grid-template-rows: 0 minmax(66.00869302rem, max-content);
        grid-area: 8 / 5 / 9 / 9;
      }

      #qAOgFiF1XPlKSl5h {
        grid-area: 8 / 5 / 9 / 9;
      }

      #PHy7cS4BQMpHR0eb {
        grid-template-columns: 4.26666667rem 0 0 0 91.46666667rem 0 0 0 4.26666667rem;
        grid-template-rows: minmax(6.4rem, max-content) minmax(29.64775938rem, max-content) minmax(38.25139055rem, max-content) minmax(64.83953005rem, max-content) minmax(6.4rem, max-content) minmax(65.29070836rem, max-content) minmax(6.4rem, max-content) minmax(66.00869302rem, max-content) minmax(6.4rem, max-content);
      }

      #features {
        min-height: 19.63804421vh;
      }

      #IatESsvDunEGGpJK {
        grid-area: 2 / 2 / 4 / 4;
      }

      #oJy7123E1qgMVkAm {
        margin-left: 0%;
        clip-path: polygon(calc(0% + 0%) calc((0 * 545.40867987rem) + 0%), calc(100% - (0.07244318% + 0%)) calc((0 * 545.40867987rem) + 0%), calc(100% - (0.07244318% + 0%)) calc(100% - ((0 * 545.40867987rem) + 0%)), calc(0% + 0%) calc(100% - ((0 * 545.40867987rem) + 0%)));
        margin-top: 0%;
        margin-bottom: 0%;
        grid-area: 3 / 3 / 5 / 5;
        margin-right: -0.0724957%;
      }

      #Wge4EodMgbi2xniR {
        grid-template-columns: 0 0 545.40867987% 0;
        left: -222.70433993%;
        grid-template-rows: 0 0 100% 0;
      }

      #kSKF7BAXqkvkOlGF {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(8.63943788em - var(--ffsd)));
      }

      #gXRhGkyi6pahAoPc {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 8.63943788em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 8.63943788em) * -0.05);
      }

      #GGGrZbWYokQF8N3k {
        min-width: 91.6rem;
      }

      #Qp939bx8mnM2p2Cc {
        grid-area: 2 / 2 / 3 / 9;
      }

      #CSl1nt0lSwFV3EgA {
        grid-area: 2 / 2 / 3 / 5;
      }

      #IdWDhbczDqsCDMQX {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.68888em - var(--ffsd)));
      }

      #TwnkaULX0LlgWVXI {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.1);
      }

      #cMUjuv9swqKtqyHU {
        min-width: 77.5749992rem;
      }

      #nSxnyNdmQqBtBEYo {
        grid-area: 4 / 4 / 5 / 7;
      }

      #TY1SNEoXzhbNc9cA {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.68888em - var(--ffsd)));
      }

      #FyIS54VabpVsOS6z {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.05);
      }

      #ULRdepXwpXiCxFVE {
        min-width: 77.5749992rem;
      }

      #U0GQGzJG8kFcjS9B {
        grid-area: 6 / 3 / 7 / 6;
      }

      #y1hCAJ8u5N5gDLjD {
        grid-template-columns: 0 0 0 8.04033745rem 69.40132842rem 0;
        grid-template-rows: 0 minmax(6.35186658rem, max-content) minmax(14.66666667rem, max-content) minmax(37.52889067rem, max-content) minmax(14.78221802rem, max-content) minmax(6.631112rem, max-content);
        grid-area: 4 / 3 / 5 / 6;
      }

      #fd54UyAF4YB9XBlb {
        grid-area: 4 / 3 / 5 / 6;
      }

      #ihZ9bxvI3CF6FopU {
        grid-area: 2 / 2 / 3 / 5;
      }

      #FtcQuUHAQ47D9rL1 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.68888em - var(--ffsd)));
      }

      #TGeAucpZ8hbzS8Eq {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.1);
      }

      #IZ6dzRwhXBzyCZQV {
        min-width: 77.5749992rem;
      }

      #IRO1CeJz4nzQ7Gh6 {
        grid-area: 4 / 4 / 5 / 7;
      }

      #rsBCMfnq8TopGP3W {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.68888em - var(--ffsd)));
      }

      #Lk6zOOoeH3Asky9b {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.05);
      }

      #Bi2ZWiMpPtgSdBTn {
        min-width: 77.5749992rem;
      }

      #VRRl1HAKFIagkGMZ {
        grid-area: 6 / 3 / 7 / 6;
      }

      #YBpgzhvDyPGbx5xn {
        grid-template-columns: 0 0 0 8.04033745rem 69.40132842rem 0;
        grid-template-rows: 0 minmax(6.35186658rem, max-content) minmax(14.66666667rem, max-content) minmax(37.52889067rem, max-content) minmax(14.78221802rem, max-content) minmax(6.631112rem, max-content);
        grid-area: 6 / 4 / 7 / 7;
      }

      #ZIXDPoQ2WtjvIngt {
        grid-area: 6 / 4 / 7 / 7;
      }

      #ChWmt3aNBB5GO5pO {
        grid-area: 2 / 2 / 3 / 5;
      }

      #DbsIjPDTRJ3OijpA {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.68888em - var(--ffsd)));
      }

      #zp3K0Essj8XG0E6g {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.1);
      }

      #s1yXNf4veM4LmPh9 {
        min-width: 77.5749992rem;
      }

      #wLRFObROr4zUNB9N {
        grid-area: 4 / 4 / 5 / 7;
      }

      #dtnW85p2bntj1qGw {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.68888em - var(--ffsd)));
      }

      #Th82MjKcstJf96L6 {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.68888em) * -0.05);
      }

      #NF9X5CkjfGFOlshY {
        min-width: 77.5749992rem;
      }

      #CurpJPQbGg4l85mv {
        grid-area: 6 / 3 / 7 / 6;
      }

      #L5M1zvrXhqJLlVkx {
        grid-template-columns: 0 0 0 8.04033745rem 69.40132842rem 0;
        grid-template-rows: 0 minmax(6.35186658rem, max-content) minmax(14.66666667rem, max-content) minmax(37.52889067rem, max-content) minmax(14.78221802rem, max-content) minmax(6.631112rem, max-content);
        grid-area: 8 / 5 / 9 / 8;
      }

      #yivxW5N1n0QRSwmW {
        grid-area: 8 / 5 / 9 / 8;
      }

      #h6Qrzjb0fdU5uBxd {
        grid-template-columns: 4.26666667rem 7.0125004rem 0 0 77.44166586rem 0 0 7.0125004rem 4.26666667rem;
        grid-template-rows: minmax(6.4rem, max-content) minmax(10.35960667rem, max-content) minmax(30.80078608rem, max-content) minmax(79.96075394rem, max-content) minmax(6.4rem, max-content) minmax(79.96075394rem, max-content) minmax(6.4rem, max-content) minmax(79.96075394rem, max-content) minmax(6.4rem, max-content);
      }

      #reviews {
        min-height: 20.79098846vh;
      }

      #vgeDbPpajJDWoPLN {
        grid-area: 2 / 2 / 3 / 3;
      }

      #gpaDAwZ8LBiqcTJT {
        grid-template-columns: 0 364.26666667%;
        left: -132.13333333%;
        grid-template-rows: 0 100%;
      }

      #Bfw4EiVkU5zDhsRi {
        grid-area: 2 / 2 / 4 / 5;
      }

      #nmSNBU7ZUIIwQbrl {
        grid-area: 3 / 3 / 5 / 4;
      }

      #Fzm1k8dxHuECEAkH {
        grid-template-columns: 0 55.96350986rem 33.82354182rem 1.67961497rem;
        grid-template-rows: 0 minmax(48.80071546rem, max-content) minmax(33.88515118rem, max-content) 0;
      }

      #OSVNEWiyGg3XQty7 {
        grid-template-columns: 0 91.46666665rem 0.00000002rem;
        grid-template-rows: 0 minmax(82.68586665rem, max-content);
        grid-area: 2 / 4 / 3 / 7;
      }

      #YVHvr7RAsRc3kNsU {
        grid-area: 2 / 4 / 3 / 7;
      }

      #NBwtsHzsv6WkHCkn {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(14.34120844em - var(--ffsd)));
      }

      #ns7tDsp3tuVuTws2 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(14.34120844em - var(--ffsd)));
      }

      #Xvh7WwEGuZyf5Jtu {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 14.34120844em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 14.34120844em) * 0.1);
      }

      #SmENYS7IUryuNwaa {
        min-width: 91.6rem;
      }

      #HkXDkeXDgCykc6j5 {
        grid-area: 4 / 2 / 5 / 5;
      }

      #FqzNnbvG4GJrUZO5 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.55126165em - var(--ffsd)));
      }

      #qGqBw3uwcaHKttxw {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.55126165em) * -0.15);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.55126165em) * -0.15);
      }

      #kWBlFAEmyjuE6LTx {
        min-width: 91.6rem;
      }

      #bcOBdfYxxNv2D3Xi {
        grid-area: 6 / 3 / 7 / 6;
      }

      #ApWkf18irvr3hSQ6 {
        grid-template-columns: 4.26666667rem 0 0 91.46666667rem 0 0 4.26666667rem;
        grid-template-rows: minmax(8.13551897rem, max-content) minmax(82.68586665rem, max-content) minmax(6.4rem, max-content) minmax(31.29455287rem, max-content) minmax(16.60542168rem, max-content) minmax(51.54312088rem, max-content) minmax(8.13551897rem, max-content);
      }

      #company {
        min-height: 13.88585173vh;
      }

      #vE2ScT5xaOi4SF5Q {
        grid-area: 2 / 2 / 3 / 3;
      }

      #BL7av49lvFD4fcoB {
        grid-template-columns: 0 440.11995645%;
        left: -170.05997823%;
        grid-template-rows: 0 100%;
      }

      #a97fRpMiPe1Gd8DT {
        display: none;
      }

      #DHsv4D8dGBkxJKte {
        display: none;
      }

      #kNgVYRt4vPeMTmyv {
        display: block;
      }

      #r9FJIgJYy9PBxwVk {
        grid-area: 2 / 2 / 5 / 5;
      }

      #LFHHQbqXP9kNQfU7 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(12.39204112em - var(--ffsd)));
      }

      #PAZiAcdjP24jowsV {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 12.39204112em) * 0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 12.39204112em) * 0.1);
      }

      #x8EyTnvTGLNhIVXw {
        min-width: 78.8rem;
      }

      #B8wmoKRFpHKpZizV {
        grid-area: 3 / 3 / 4 / 4;
      }

      #Tb08xKPLmzqDu5nQ {
        grid-template-columns: 0 6.4rem 78.66666667rem 6.4rem;
        grid-template-rows: 0 minmax(7.22995095rem, max-content) minmax(14.75980063rem, max-content) minmax(6.4rem, max-content);
      }

      #zC9IlUBJibglXmkI {
        grid-template-columns: 0 91.46666667rem;
        grid-template-rows: 0 minmax(28.38975158rem, max-content);
        grid-area: 2 / 2 / 3 / 8;
      }

      #rTIVi9GOIrNJyZ6v {
        grid-area: 2 / 2 / 3 / 8;
      }

      #KRkPopCraFQRyOf1 {
        display: none;
      }

      #l1WXjOdvui3ngpfP {
        display: none;
      }

      #fTmpltE79MpZ2KBV {
        display: block;
      }

      #kdABfMvPxfrLEOHU {
        grid-area: 2 / 2 / 7 / 7;
      }

      #t3lsHEDejp33ni0j {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.24651136em - var(--ffsd)));
      }

      #YbTnU5Sp7bxnVDmm {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.24651136em) * 0.1);
      }

      #P46znYsbwZsmM4NH {
        min-width: 78.8rem;
      }

      #UqMe3ybdMi08zzBy {
        grid-area: 3 / 4 / 4 / 6;
      }

      #EkX9AZed4PmkBVt9 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.66353894em - var(--ffsd)));
      }

      #sulHgf0yB1l7bZ7Z {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.66353894em) * -0.15);
      }

      #TAVEK9EhOL3Rwq2w {
        min-width: 78.8rem;
      }

      #il7wrKoIQwxPF3Jb {
        grid-area: 5 / 3 / 6 / 5;
      }

      #lsIPLR6Jwatj7uss {
        grid-template-columns: 0 6.4rem 0 78.66666667rem 0 6.4rem;
        grid-template-rows: 0 minmax(9.97003316rem, max-content) minmax(6.29579178rem, max-content) minmax(4.99244358rem, max-content) minmax(5.37765393rem, max-content) minmax(6.4rem, max-content);
        grid-area: 4 / 3 / 5 / 9;
      }

      #ptO4kiHjpRmIuPZP {
        grid-area: 4 / 3 / 5 / 9;
      }

      #lIhtNJUExvnzBWz7 {
        display: none;
      }

      #NzdDYuKIiItkGfAA {
        display: none;
      }

      #okwNDTPp1bn31rBe {
        display: block;
      }

      #agBeVOoGKQtG2jxY {
        grid-area: 2 / 2 / 7 / 7;
      }

      #GVSV7UrJR52kQrvD {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.24651136em - var(--ffsd)));
      }

      #wb74OMT2bdQ9Xw5L {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.24651136em) * 0.1);
      }

      #h0EGqo94WNpUKWiv {
        min-width: 78.8rem;
      }

      #RkpYWUshQjwy14pJ {
        grid-area: 3 / 4 / 4 / 6;
      }

      #bLznJ6KSmkPyyBqs {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.66353894em - var(--ffsd)));
      }

      #Oliy3RHyQSSuFvPz {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.66353894em) * -0.15);
      }

      #UbbnBmd3KyXKTAX9 {
        min-width: 78.8rem;
      }

      #JPcA8VFk8OF0ifMR {
        grid-area: 5 / 3 / 6 / 5;
      }

      #PmnrPqNjmF5d1Bfs {
        grid-template-columns: 0 6.4rem 0 78.66666667rem 0 6.4rem;
        grid-template-rows: 0 minmax(8.74265807rem, max-content) minmax(6.29579178rem, max-content) minmax(4.99244358rem, max-content) minmax(5.37765393rem, max-content) minmax(6.4rem, max-content);
        grid-area: 6 / 4 / 7 / 10;
      }

      #KvrElmXvAtWXYg4H {
        grid-area: 6 / 4 / 7 / 10;
      }

      #YVwuq5sxebgxJwQn {
        display: none;
      }

      #tRQLkAtD61GSvKbQ {
        display: block;
      }

      #f3wlcYGs6txlvsns {
        grid-area: 2 / 2 / 11 / 11;
      }

      #yruasGzZFRwySsjB {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(6.40002667em - var(--ffsd)));
      }

      #uq4nCiCkmn0NIOVd {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 6.40002667em) * 0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 6.40002667em) * 0.1);
      }

      #BcJk2oh9WURfrZF2 {
        min-width: 78.8rem;
      }

      #nIwAtMhxaMz0AEho {
        grid-area: 3 / 3 / 4 / 10;
      }

      #e6QtkDXDpJlnZh4J {
        grid-area: 6 / 4 / 9 / 5;
      }

      #hHb4Q6phZfQQboKc {
        grid-area: 7 / 6 / 10 / 7;
      }

      #Wkr0FTbwamDt0pHi {
        grid-area: 5 / 8 / 8 / 9;
      }

      #jXof2BTql7gUNcQk {
        grid-template-columns: 0 6.4rem 9.22091443rem 15.58845603rem 6.66666667rem 15.58845603rem 6.79280304rem 15.58845603rem 9.22091443rem 6.4rem;
        grid-template-rows: 0 minmax(6.4rem, max-content) minmax(6.40002667rem, max-content) minmax(6.4rem, max-content) 0 0 minmax(15.58845603rem, max-content) 0 0 minmax(6.4rem, max-content);
        grid-area: 8 / 5 / 9 / 11;
      }

      #fM4keex9JJO2fu6J {
        grid-area: 8 / 5 / 9 / 11;
      }

      #nxfR97sMUsXnrV4E {
        grid-area: 10 / 6 / 11 / 7;
      }

      #YRQNL0tddKkMGuSB {
        grid-template-columns: 4.26666667rem 0 0 0 0 91.46666666rem 0 0 0 0 4.26666667rem;
        grid-template-rows: minmax(6.4rem, max-content) minmax(28.38975158rem, max-content) 0 minmax(33.03592244rem, max-content) minmax(1.12400859rem, max-content) minmax(31.80854735rem, max-content) minmax(1.06666667rem, max-content) minmax(41.1884827rem, max-content) minmax(6.4rem, max-content) minmax(91.63327261rem, max-content) minmax(6.4rem, max-content);
      }

      #contact {
        min-height: 16.77738047vh;
      }
    }

    @media (min-width: 375.05px) and (max-width: 480px) {
      #V1PkVSJklNjNwezR {
        grid-area: 2 / 2 / 4 / 4;
      }

      #r7vMN3Xx0kj8k2IH {
        margin-left: -1.02698078%;
        clip-path: polygon(calc(1.00631152% + 0%) calc((0.00556612 * 365.11197156rem) + 0%), calc(100% - (1.00631152% + 0%)) calc((0.00556612 * 365.11197156rem) + 0%), calc(100% - (1.00631152% + 0%)) calc(100% - ((0.00556612 * 365.11197156rem) + 0%)), calc(1.00631152% + 0%) calc(100% - ((0.00556612 * 365.11197156rem) + 0%)));
        margin-top: -0.55661177%;
        margin-bottom: -0.55661177%;
        grid-area: 3 / 3 / 5 / 5;
        margin-right: -1.02698078%;
      }

      #XYGJy2jmn2zLu1UL {
        grid-template-columns: 0 0 365.11197156% 0;
        left: -132.55598578%;
        grid-template-rows: 0 0 100% 0;
      }

      #tfT6yyPb1ZV1d9se {
        grid-area: 2 / 2 / 5 / 3;
      }

      #T8oldhrmylbPLWbc {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(3.33333333em - var(--ffsd)));
      }

      #BavEe7O215xM5qzQ {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 3.33333333em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 3.33333333em) * -0.05);
      }

      #yIPeyou0JDxQXCdz {
        min-width: 39.08509814rem;
      }

      #QqxdLod3szIO71dV {
        grid-area: 3 / 4 / 4 / 5;
      }

      #unapl4vsnFc9yPsN {
        grid-template-columns: 0 5.87392419rem 3.73867565rem 38.98093147rem;
        grid-template-rows: 0 minmax(1.89536186rem, max-content) minmax(8rem, max-content) minmax(1.89536186rem, max-content);
        grid-area: 2 / 3 / 3 / 6;
      }

      #vwyAQYfZVZRL5z6z {
        grid-area: 2 / 3 / 3 / 6;
      }

      #Q4df3GZJrZ51IXjK {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(13.34160778em - var(--ffsd)));
      }

      #JWKnk5WEUL0CTval {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 13.34160778em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 13.34160778em) * 0.05);
      }

      #sGGSsRQl19Yu8XHn {
        min-width: 93.4375rem;
      }

      #wOLfb0jH9BTxG4yx {
        grid-area: 4 / 4 / 5 / 9;
      }

      #MYBMSLPxXz5pfuz1 {
        grid-area: 2 / 2 / 5 / 5;
      }

      #FD05YrJEyDGvbuWI {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.990375em - var(--ffsd)));
      }

      #kvNVd7MeEhqbwd9q {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.990375em) * 0.1);
      }

      #nWXLDGwPaZTckdiu {
        min-width: 69.37594854rem;
      }

      #MjwwCMUDU9FSXyaP {
        grid-area: 3 / 3 / 4 / 4;
      }

      #kB1woNSaTg7J7n0Q {
        grid-template-columns: 0 0.83333333rem 69.27178187rem 0.83333333rem;
        grid-template-rows: 0 minmax(0.83333333rem, max-content) minmax(12.01624483rem, max-content) minmax(0.83333333rem, max-content);
      }

      #eg75sqrZoYR01tzO {
        grid-template-columns: 0 70.93844854rem;
        grid-template-rows: 0 minmax(13.6829115rem, max-content);
        grid-area: 6 / 5 / 7 / 7;
      }

      #iI6EKIHWr4zPPhxU {
        grid-area: 6 / 5 / 7 / 7;
      }

      #DCPfcD9PThZmbqWt {
        grid-area: 2 / 2 / 7 / 7;
      }

      #G0zLjOsXU7kDtfAT {
        grid-area: 2 / 2 / 7 / 7;
      }

      #hWUU6SVK721sC3IZ {
        grid-area: 3 / 3 / 5 / 4;
      }

      #OKGpBJexAmp9oE74 {
        font-size: max(0px, calc(3.00927083em - var(--ffsd)));
      }

      #kfmLqOmvtD9Dhgus {
        font-size: max(0px, calc(3.00927083em - var(--ffsd)));
      }

      #xvtGfSYKiAxKiWM5 {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(0px, 3.00927083em) * 0.05);
      }

      #bcGNc4zpjJ1e5Gcu {
        min-width: 21.44568504rem;
      }

      #WMHh43EoIXRfqJ5f {
        grid-area: 4 / 5 / 6 / 6;
      }

      #A0T5EBm235zwQ00p {
        grid-template-columns: 0 2.34397168rem 5.8361349rem 2.39305765rem 21.34151838rem 3.16593072rem;
        grid-template-rows: 0 minmax(2.01457551rem, max-content) minmax(0.1851849rem, max-content) minmax(6.60101848rem, max-content) minmax(0.29713083rem, max-content) minmax(2.19976041rem, max-content);
      }

      #Ybiycu5KGDu4sVSM {
        grid-area: 2 / 2 / 7 / 7;
      }

      #SKzyVpcY3vmuLH6M {
        grid-area: 4 / 3 / 5 / 4;
      }

      #V4RiPa246S53Tecs {
        font-size: max(0px, calc(3.00927083em - var(--ffsd)));
      }

      #ytyB6EoLIADnw05m {
        font-size: max(0px, calc(3.00927083em - var(--ffsd)));
      }

      #XFkGj050kKhxTQeY {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(0px, 3.00927083em) * 0.05);
      }

      #dLHkhTV2wQWxNTSo {
        min-width: 21.44568504rem;
      }

      #qNqUZ3sU2sipgESZ {
        grid-area: 3 / 5 / 6 / 6;
      }

      #gNpfPXxzNa5gPVsu {
        grid-template-columns: 0 3.16593072rem 5.66203727rem 1.74519624rem 21.34151838rem 3.16593072rem;
        grid-template-rows: 0 minmax(2.19976041rem, max-content) minmax(0.29713083rem, max-content) minmax(6.30388765rem, max-content) minmax(0.29713083rem, max-content) minmax(2.19976041rem, max-content);
      }

      #PUVfIJMM631qA3Y3 {
        grid-template-columns: 0 2.17225254rem 0 35.08061333rem 0 56.08046746rem;
        grid-template-rows: 0 minmax(63.12104109rem, max-content) minmax(11.29767013rem, max-content) minmax(2.82666747rem, max-content) minmax(11.29767013rem, max-content) minmax(4.79028452rem, max-content);
      }

      #SAI6BBGmVYGDQt1c {
        grid-area: 2 / 3 / 5 / 4;
      }

      #nLAzXlr1bzrAm8YR {
        grid-template-columns: 0 19.7125592rem 53.90821493rem 19.7125592rem;
        grid-template-rows: 0 minmax(5.38108356rem, max-content) minmax(93.33333333rem, max-content) minmax(7.95224977rem, max-content);
        grid-area: 8 / 2 / 9 / 8;
      }

      #LarSXPHokbk2xrCp {
        grid-area: 8 / 2 / 9 / 8;
      }

      #ilgtogNyHpvKkL8t {
        grid-template-columns: 3.33333333rem 0 0 0 48.59353131rem 22.34491723rem 22.39488479rem 0 3.33333333rem;
        grid-template-rows: minmax(5rem, max-content) minmax(11.79072373rem, max-content) minmax(13.36713095rem, max-content) minmax(30.65730061rem, max-content) minmax(14.1105185rem, max-content) minmax(13.6829115rem, max-content) minmax(5rem, max-content) minmax(106.66666666rem, max-content) minmax(5rem, max-content);
      }

      #home {
        min-height: 16.00575119vh;
      }

      #YZZMOPq5rNpb7QCk {
        grid-area: 2 / 2 / 3 / 3;
      }

      #IO7F62or5XVGkuQW {
        grid-template-columns: 0 314.58147516%;
        left: -107.29073758%;
        grid-template-rows: 0 100%;
      }

      #EmNxSBqrUi8bFcwv {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(13.13886748em - var(--ffsd)));
      }

      #fXpPkNxuVTo02ZMi {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 13.13886748em) * 0.045);
      }

      #C3ZjmOA5zLmTvu1Y {
        min-width: 93.4375rem;
      }

      #YWLUDDpnPevptUDU {
        grid-area: 2 / 2 / 3 / 6;
      }

      #DxNX2e9M3t7apqoR {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.00928456em - var(--ffsd)));
      }

      #lyCt6EK37OU9rAcz {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.00928456em) * -0.15);
      }

      #rqEhnPH2xfPMqRX2 {
        min-width: 93.4375rem;
      }

      #bHCDSflBLaOvSWBI {
        grid-area: 4 / 3 / 5 / 7;
      }

      #BfwUqEZh95gLLu8l {
        grid-area: 2 / 2 / 4 / 5;
      }

      #smrqivlevH9YdFxA {
        grid-area: 3 / 3 / 5 / 4;
      }

      #CQTUwGBM7FuGM1Um {
        grid-template-columns: 0 57.1056223rem 34.51381818rem 1.71389283rem;
        grid-template-rows: 0 minmax(49.79664843rem, max-content) minmax(34.57668488rem, max-content) 0;
        grid-area: 6 / 4 / 7 / 5;
      }

      #cdwSjqqOEBCoUrOf {
        grid-area: 6 / 4 / 7 / 5;
      }

      #NXqjaFCpzaOOtdPU {
        grid-template-columns: 3.33333333rem 0 0.00000001rem 93.33333331rem 0.00000001rem 0 3.33333333rem;
        grid-template-rows: minmax(5rem, max-content) minmax(30.04106913rem, max-content) minmax(7.87209738rem, max-content) minmax(39.57921975rem, max-content) minmax(5rem, max-content) minmax(84.37333331rem, max-content) minmax(5rem, max-content);
      }

      #about {
        min-height: 13.79059908vh;
      }

      #y0xdiF8Gd8AYedtf {
        grid-area: 2 / 2 / 3 / 3;
      }

      #E1SM9jAHpWgnkuEN {
        grid-template-columns: 0 473.75046795%;
        left: -186.87523397%;
        grid-template-rows: 0 100%;
      }

      #MGrHmHL1Ak6ngcrA {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(13.23147771em - var(--ffsd)));
      }

      #tOhYscnGCWArdh1C {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 13.23147771em) * 0.045);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 13.23147771em) * 0.045);
      }

      #zIsf8m6Lnzsm2uob {
        min-width: 93.4375rem;
      }

      #Vjxi9enmN4GKXvjU {
        grid-area: 2 / 2 / 3 / 6;
      }

      #OZu3bZzneaGtLHwR {
        display: block;
      }

      #Gen2kkyU64l8vpFu {
        display: none;
      }

      #Mwc8GSrJOgnXfRM6 {
        grid-area: 2 / 2 / 7 / 7;
      }

      #tvczyqODUZGkxznJ {
        grid-area: 2 / 2 / 5 / 5;
      }

      #RcH6wUArHfuJ8sXl {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.4444375em - var(--ffsd)));
      }

      #MT3EMpvTUaYvOeN0 {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.05);
      }

      #BrQmGSUIyw3kRSIl {
        min-width: 5.02441406rem;
      }

      #F6jnuoMur73zkQOk {
        grid-area: 3 / 3 / 4 / 4;
      }

      #KCRRsM9AKpvwQmhT {
        grid-template-columns: 0 3.70790008rem 4.9202474rem 3.70790008rem;
        grid-template-rows: 0 minmax(3.57774566rem, max-content) minmax(5.18055625rem, max-content) minmax(3.57774566rem, max-content);
      }

      #VSPZrwey5ta2PsRK {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.44441667em - var(--ffsd)));
      }

      #FwnhbEOBFWPfZADY {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.44441667em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.44441667em) * -0.05);
      }

      #FSpu6gxGdAWnZAZT {
        min-width: 67.43391979rem;
      }

      #qk0ICm39BL3jlBT3 {
        grid-area: 5 / 3 / 6 / 6;
      }

      #COxdKC2a8KiczNgu {
        grid-template-columns: 0 13.00179011rem 0 12.33604756rem 54.99370556rem 13.00179011rem;
        grid-template-rows: 0 minmax(9.62457909rem, max-content) minmax(12.33604756rem, max-content) minmax(8.69750729rem, max-content) minmax(16.43055833rem, max-content) minmax(14.98393029rem, max-content);
      }

      #ROE8mWEsRK3HhzmT {
        grid-template-columns: 0 93.33333333rem;
        grid-template-rows: 0 minmax(62.07262257rem, max-content);
        grid-area: 4 / 3 / 5 / 7;
      }

      #BRpQnQIlxbOgdkxB {
        grid-area: 4 / 3 / 5 / 7;
      }

      #xY4x0yK7QGzXENti {
        display: block;
      }

      #XOvAWaF962YJaLYi {
        display: none;
      }

      #IRflFs60Z6IkegYO {
        grid-area: 2 / 2 / 7 / 7;
      }

      #QKr52SEnpCeSumKk {
        grid-area: 2 / 2 / 5 / 5;
      }

      #GIgokzRGzuQ5vwPb {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.4444375em - var(--ffsd)));
      }

      #LR8FtwqsgUwTynw7 {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.05);
      }

      #WmyHRLRMhLm5xAfE {
        min-width: 7.09327643rem;
      }

      #N7pAvJj1PFRyXOvl {
        grid-area: 3 / 3 / 4 / 4;
      }

      #JHXUPsoXENtzUvZZ {
        grid-template-columns: 0 2.6734689rem 6.98910977rem 2.6734689rem;
        grid-template-rows: 0 minmax(3.57774566rem, max-content) minmax(5.18055625rem, max-content) minmax(3.57774566rem, max-content);
      }

      #KhSgB0wHQxHLNVJH {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.44441667em - var(--ffsd)));
      }

      #aSEd131TVZSH343o {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.44441667em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.44441667em) * -0.05);
      }

      #EqYCjgD3Dznoc9Fi {
        min-width: 65.88784563rem;
      }

      #cfG6CdAXhSAVwrOE {
        grid-area: 5 / 3 / 6 / 6;
      }

      #uNWkFl1h7Kx88bUO {
        grid-template-columns: 0 13.77482718rem 0 12.33604756rem 53.4476314rem 13.77482718rem;
        grid-template-rows: 0 minmax(9.62457909rem, max-content) minmax(12.33604756rem, max-content) minmax(8.69750729rem, max-content) minmax(16.43055833rem, max-content) minmax(14.98393029rem, max-content);
      }

      #bcfWdUD1lDoDHeTG {
        grid-template-columns: 0 93.33333333rem;
        grid-template-rows: 0 minmax(62.07262257rem, max-content);
        grid-area: 6 / 4 / 7 / 8;
      }

      #QHtE4ZDOQr1grhXf {
        grid-area: 6 / 4 / 7 / 8;
      }

      #RogP5gSzgTNO2Mvk {
        display: block;
      }

      #FqaL5HhvuaqKYEpU {
        display: none;
      }

      #hLvDrJoBo1vXNtbI {
        grid-area: 2 / 2 / 7 / 7;
      }

      #DsOY97bDsNYtojnA {
        grid-area: 2 / 2 / 5 / 5;
      }

      #Lzd6TiKVutnhnweZ {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.4444375em - var(--ffsd)));
      }

      #QHaAhPno4VSbeyhq {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.05);
      }

      #sADlAHndSmaPdnPL {
        min-width: 7.09327643rem;
      }

      #FO7HqEAUZD26skhq {
        grid-area: 3 / 3 / 4 / 4;
      }

      #Qlad3DMmujstOt3B {
        grid-template-columns: 0 2.6734689rem 6.98910977rem 2.6734689rem;
        grid-template-rows: 0 minmax(3.57774566rem, max-content) minmax(5.18055625rem, max-content) minmax(3.57774566rem, max-content);
      }

      #tEYMpNJpB7liYEWd {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.44441667em - var(--ffsd)));
      }

      #F7SLL6FeLL2XltMA {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.44441667em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.44441667em) * -0.05);
      }

      #adcVNXMIKHgyhdy1 {
        min-width: 63.5687344rem;
      }

      #kLAiTL7PBno2WmOc {
        grid-area: 5 / 3 / 6 / 6;
      }

      #o37c4mED4DturuXU {
        grid-template-columns: 0 14.9343828rem 0 12.33604756rem 51.12852017rem 14.9343828rem;
        grid-template-rows: 0 minmax(9.62457909rem, max-content) minmax(12.33604756rem, max-content) minmax(8.69750729rem, max-content) minmax(16.43055833rem, max-content) minmax(14.98393029rem, max-content);
      }

      #ZCzeiv9LaKupDtu5 {
        grid-template-columns: 0 93.33333333rem;
        grid-template-rows: 0 minmax(62.07262257rem, max-content);
        grid-area: 8 / 5 / 9 / 9;
      }

      #qAOgFiF1XPlKSl5h {
        grid-area: 8 / 5 / 9 / 9;
      }

      #PHy7cS4BQMpHR0eb {
        grid-template-columns: 3.33333333rem 0 0 0 93.33333333rem 0 0 0 3.33333333rem;
        grid-template-rows: minmax(5rem, max-content) minmax(30.2528157rem, max-content) minmax(29.88389887rem, max-content) minmax(62.07262257rem, max-content) minmax(5rem, max-content) minmax(62.07262257rem, max-content) minmax(5rem, max-content) minmax(62.07262257rem, max-content) minmax(5rem, max-content);
      }

      #features {
        min-height: 20.76823744vh;
      }

      #IatESsvDunEGGpJK {
        grid-area: 2 / 2 / 4 / 4;
      }

      #oJy7123E1qgMVkAm {
        margin-left: 0%;
        clip-path: polygon(calc(0% + 0%) calc((0 * 430.5072765rem) + 0%), calc(100% - (0.07244318% + 0%)) calc((0 * 430.5072765rem) + 0%), calc(100% - (0.07244318% + 0%)) calc(100% - ((0 * 430.5072765rem) + 0%)), calc(0% + 0%) calc(100% - ((0 * 430.5072765rem) + 0%)));
        margin-top: 0%;
        margin-bottom: 0%;
        grid-area: 3 / 3 / 5 / 5;
        margin-right: -0.0724957%;
      }

      #Wge4EodMgbi2xniR {
        grid-template-columns: 0 0 430.5072765% 0;
        left: -165.25363825%;
        grid-template-rows: 0 0 100% 0;
      }

      #kSKF7BAXqkvkOlGF {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(8.81575294em - var(--ffsd)));
      }

      #gXRhGkyi6pahAoPc {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 8.81575294em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 8.81575294em) * -0.05);
      }

      #GGGrZbWYokQF8N3k {
        min-width: 93.4375rem;
      }

      #Qp939bx8mnM2p2Cc {
        grid-area: 2 / 2 / 3 / 9;
      }

      #CSl1nt0lSwFV3EgA {
        grid-area: 2 / 2 / 3 / 5;
      }

      #IdWDhbczDqsCDMQX {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.4444375em - var(--ffsd)));
      }

      #TwnkaULX0LlgWVXI {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.1);
      }

      #cMUjuv9swqKtqyHU {
        min-width: 60.60546812rem;
      }

      #nSxnyNdmQqBtBEYo {
        grid-area: 4 / 4 / 5 / 7;
      }

      #TY1SNEoXzhbNc9cA {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.4444375em - var(--ffsd)));
      }

      #FyIS54VabpVsOS6z {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.05);
      }

      #ULRdepXwpXiCxFVE {
        min-width: 60.60546812rem;
      }

      #U0GQGzJG8kFcjS9B {
        grid-area: 6 / 3 / 7 / 6;
      }

      #y1hCAJ8u5N5gDLjD {
        grid-template-columns: 0 0 0 6.28151363rem 54.21978782rem 0;
        grid-template-rows: 0 minmax(4.96239577rem, max-content) minmax(11.45833333rem, max-content) minmax(29.31944583rem, max-content) minmax(11.54860783rem, max-content) minmax(5.18055625rem, max-content);
        grid-area: 4 / 3 / 5 / 6;
      }

      #fd54UyAF4YB9XBlb {
        grid-area: 4 / 3 / 5 / 6;
      }

      #ihZ9bxvI3CF6FopU {
        grid-area: 2 / 2 / 3 / 5;
      }

      #FtcQuUHAQ47D9rL1 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.4444375em - var(--ffsd)));
      }

      #TGeAucpZ8hbzS8Eq {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.1);
      }

      #IZ6dzRwhXBzyCZQV {
        min-width: 60.60546812rem;
      }

      #IRO1CeJz4nzQ7Gh6 {
        grid-area: 4 / 4 / 5 / 7;
      }

      #rsBCMfnq8TopGP3W {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.4444375em - var(--ffsd)));
      }

      #Lk6zOOoeH3Asky9b {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.05);
      }

      #Bi2ZWiMpPtgSdBTn {
        min-width: 60.60546812rem;
      }

      #VRRl1HAKFIagkGMZ {
        grid-area: 6 / 3 / 7 / 6;
      }

      #YBpgzhvDyPGbx5xn {
        grid-template-columns: 0 0 0 6.28151363rem 54.21978782rem 0;
        grid-template-rows: 0 minmax(4.96239577rem, max-content) minmax(11.45833333rem, max-content) minmax(29.31944583rem, max-content) minmax(11.54860783rem, max-content) minmax(5.18055625rem, max-content);
        grid-area: 6 / 4 / 7 / 7;
      }

      #ZIXDPoQ2WtjvIngt {
        grid-area: 6 / 4 / 7 / 7;
      }

      #ChWmt3aNBB5GO5pO {
        grid-area: 2 / 2 / 3 / 5;
      }

      #DbsIjPDTRJ3OijpA {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.4444375em - var(--ffsd)));
      }

      #zp3K0Essj8XG0E6g {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.1);
      }

      #s1yXNf4veM4LmPh9 {
        min-width: 60.60546812rem;
      }

      #wLRFObROr4zUNB9N {
        grid-area: 4 / 4 / 5 / 7;
      }

      #dtnW85p2bntj1qGw {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.4444375em - var(--ffsd)));
      }

      #Th82MjKcstJf96L6 {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.05);
      }

      #NF9X5CkjfGFOlshY {
        min-width: 60.60546812rem;
      }

      #CurpJPQbGg4l85mv {
        grid-area: 6 / 3 / 7 / 6;
      }

      #L5M1zvrXhqJLlVkx {
        grid-template-columns: 0 0 0 6.28151363rem 54.21978782rem 0;
        grid-template-rows: 0 minmax(4.96239577rem, max-content) minmax(11.45833333rem, max-content) minmax(29.31944583rem, max-content) minmax(11.54860783rem, max-content) minmax(5.18055625rem, max-content);
        grid-area: 8 / 5 / 9 / 8;
      }

      #yivxW5N1n0QRSwmW {
        grid-area: 8 / 5 / 9 / 8;
      }

      #h6Qrzjb0fdU5uBxd {
        grid-template-columns: 3.33333333rem 16.41601594rem 0 0 60.50130146rem 0 0 16.41601594rem 3.33333333rem;
        grid-template-rows: minmax(5rem, max-content) minmax(10.57102721rem, max-content) minmax(24.06311413rem, max-content) minmax(62.46933901rem, max-content) minmax(5rem, max-content) minmax(62.46933901rem, max-content) minmax(5rem, max-content) minmax(62.46933901rem, max-content) minmax(5rem, max-content);
      }

      #reviews {
        min-height: 18.87254566vh;
      }

      #vgeDbPpajJDWoPLN {
        grid-area: 2 / 2 / 3 / 3;
      }

      #gpaDAwZ8LBiqcTJT {
        grid-template-columns: 0 342.29762044%;
        left: -121.14881022%;
        grid-template-rows: 0 100%;
      }

      #Bfw4EiVkU5zDhsRi {
        grid-area: 2 / 2 / 4 / 5;
      }

      #nmSNBU7ZUIIwQbrl {
        grid-area: 3 / 3 / 5 / 4;
      }

      #Fzm1k8dxHuECEAkH {
        grid-template-columns: 0 57.1056223rem 34.51381818rem 1.71389283rem;
        grid-template-rows: 0 minmax(49.79664843rem, max-content) minmax(34.57668488rem, max-content) 0;
      }

      #OSVNEWiyGg3XQty7 {
        grid-template-columns: 0 93.33333331rem 0.00000002rem;
        grid-template-rows: 0 minmax(84.37333331rem, max-content);
        grid-area: 2 / 4 / 3 / 7;
      }

      #YVHvr7RAsRc3kNsU {
        grid-area: 2 / 4 / 3 / 7;
      }

      #NBwtsHzsv6WkHCkn {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(14.63388616em - var(--ffsd)));
      }

      #ns7tDsp3tuVuTws2 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(14.63388616em - var(--ffsd)));
      }

      #Xvh7WwEGuZyf5Jtu {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 14.63388616em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 14.63388616em) * 0.1);
      }

      #SmENYS7IUryuNwaa {
        min-width: 93.4375rem;
      }

      #HkXDkeXDgCykc6j5 {
        grid-area: 4 / 2 / 5 / 5;
      }

      #FqzNnbvG4GJrUZO5 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.4444375em - var(--ffsd)));
      }

      #qGqBw3uwcaHKttxw {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.15);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.15);
      }

      #kWBlFAEmyjuE6LTx {
        min-width: 93.4375rem;
      }

      #bcOBdfYxxNv2D3Xi {
        grid-area: 6 / 3 / 7 / 6;
      }

      #ApWkf18irvr3hSQ6 {
        grid-template-columns: 3.33333333rem 0 0 93.33333333rem 0 0 3.33333333rem;
        grid-template-rows: minmax(5rem, max-content) minmax(84.37333331rem, max-content) minmax(5rem, max-content) minmax(31.93321721rem, max-content) minmax(12.97298568rem, max-content) minmax(48.16890632rem, max-content) minmax(5rem, max-content);
      }

      #company {
        min-height: 15.00561738vh;
      }

      #vE2ScT5xaOi4SF5Q {
        grid-area: 2 / 2 / 3 / 3;
      }

      #BL7av49lvFD4fcoB {
        grid-template-columns: 0 354.88105978%;
        left: -127.44052989%;
        grid-template-rows: 0 100%;
      }

      #a97fRpMiPe1Gd8DT {
        display: none;
      }

      #DHsv4D8dGBkxJKte {
        display: block;
      }

      #kNgVYRt4vPeMTmyv {
        display: none;
      }

      #r9FJIgJYy9PBxwVk {
        grid-area: 2 / 2 / 5 / 5;
      }

      #LFHHQbqXP9kNQfU7 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(13.1271622em - var(--ffsd)));
      }

      #PAZiAcdjP24jowsV {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 13.1271622em) * 0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 13.1271622em) * 0.1);
      }

      #x8EyTnvTGLNhIVXw {
        min-width: 83.4375rem;
      }

      #B8wmoKRFpHKpZizV {
        grid-area: 3 / 3 / 4 / 4;
      }

      #Tb08xKPLmzqDu5nQ {
        grid-template-columns: 0 5rem 83.33333333rem 5rem;
        grid-template-rows: 0 minmax(5.64839918rem, max-content) minmax(15.63538203rem, max-content) minmax(5rem, max-content);
      }

      #zC9IlUBJibglXmkI {
        grid-template-columns: 0 93.33333333rem;
        grid-template-rows: 0 minmax(26.2837812rem, max-content);
        grid-area: 2 / 2 / 3 / 8;
      }

      #rTIVi9GOIrNJyZ6v {
        grid-area: 2 / 2 / 3 / 8;
      }

      #KRkPopCraFQRyOf1 {
        display: none;
      }

      #l1WXjOdvui3ngpfP {
        display: block;
      }

      #fTmpltE79MpZ2KBV {
        display: none;
      }

      #kdABfMvPxfrLEOHU {
        grid-area: 2 / 2 / 7 / 7;
      }

      #t3lsHEDejp33ni0j {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.00002083em - var(--ffsd)));
      }

      #YbTnU5Sp7bxnVDmm {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.00002083em) * 0.1);
      }

      #P46znYsbwZsmM4NH {
        min-width: 83.4375rem;
      }

      #UqMe3ybdMi08zzBy {
        grid-area: 3 / 4 / 4 / 6;
      }

      #EkX9AZed4PmkBVt9 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.4444375em - var(--ffsd)));
      }

      #sulHgf0yB1l7bZ7Z {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.15);
      }

      #TAVEK9EhOL3Rwq2w {
        min-width: 83.4375rem;
      }

      #il7wrKoIQwxPF3Jb {
        grid-area: 5 / 3 / 6 / 5;
      }

      #lsIPLR6Jwatj7uss {
        grid-template-columns: 0 5rem 0 83.33333333rem 0 5rem;
        grid-template-rows: 0 minmax(7.78908841rem, max-content) minmax(5.39789885rem, max-content) minmax(3.90034654rem, max-content) minmax(5.12500208rem, max-content) minmax(5rem, max-content);
        grid-area: 4 / 3 / 5 / 9;
      }

      #ptO4kiHjpRmIuPZP {
        grid-area: 4 / 3 / 5 / 9;
      }

      #lIhtNJUExvnzBWz7 {
        display: none;
      }

      #NzdDYuKIiItkGfAA {
        display: block;
      }

      #okwNDTPp1bn31rBe {
        display: none;
      }

      #agBeVOoGKQtG2jxY {
        grid-area: 2 / 2 / 7 / 7;
      }

      #GVSV7UrJR52kQrvD {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.00002083em - var(--ffsd)));
      }

      #wb74OMT2bdQ9Xw5L {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.00002083em) * 0.1);
      }

      #h0EGqo94WNpUKWiv {
        min-width: 83.4375rem;
      }

      #RkpYWUshQjwy14pJ {
        grid-area: 3 / 4 / 4 / 6;
      }

      #bLznJ6KSmkPyyBqs {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(4.4444375em - var(--ffsd)));
      }

      #Oliy3RHyQSSuFvPz {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 4.4444375em) * -0.15);
      }

      #UbbnBmd3KyXKTAX9 {
        min-width: 83.4375rem;
      }

      #JPcA8VFk8OF0ifMR {
        grid-area: 5 / 3 / 6 / 5;
      }

      #PmnrPqNjmF5d1Bfs {
        grid-template-columns: 0 5rem 0 83.33333333rem 0 5rem;
        grid-template-rows: 0 minmax(6.83020162rem, max-content) minmax(5.39789885rem, max-content) minmax(3.90034654rem, max-content) minmax(5.12500208rem, max-content) minmax(5rem, max-content);
        grid-area: 6 / 4 / 7 / 10;
      }

      #KvrElmXvAtWXYg4H {
        grid-area: 6 / 4 / 7 / 10;
      }

      #YVwuq5sxebgxJwQn {
        display: block;
      }

      #tRQLkAtD61GSvKbQ {
        display: none;
      }

      #f3wlcYGs6txlvsns {
        grid-area: 2 / 2 / 11 / 11;
      }

      #yruasGzZFRwySsjB {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.00002083em - var(--ffsd)));
      }

      #uq4nCiCkmn0NIOVd {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.00002083em) * 0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.00002083em) * 0.1);
      }

      #BcJk2oh9WURfrZF2 {
        min-width: 22.81488288rem;
      }

      #nIwAtMhxaMz0AEho {
        grid-area: 6 / 3 / 7 / 4;
      }

      #e6QtkDXDpJlnZh4J {
        grid-area: 4 / 5 / 9 / 6;
      }

      #hHb4Q6phZfQQboKc {
        grid-area: 5 / 7 / 10 / 8;
      }

      #Wkr0FTbwamDt0pHi {
        grid-area: 3 / 9 / 8 / 10;
      }

      #jXof2BTql7gUNcQk {
        grid-template-columns: 0 9.2859813rem 22.71071621rem 5rem 12.17848127rem 5.20833333rem 12.17848127rem 5.30687738rem 12.17848127rem 9.2859813rem;
        grid-template-rows: 0 minmax(5rem, max-content) 0 0 minmax(3.08923855rem, max-content) minmax(6.00000417rem, max-content) minmax(3.08923855rem, max-content) 0 0 minmax(7.66103431rem, max-content);
        grid-area: 8 / 5 / 9 / 11;
      }

      #fM4keex9JJO2fu6J {
        grid-area: 8 / 5 / 9 / 11;
      }

      #nxfR97sMUsXnrV4E {
        grid-area: 10 / 6 / 11 / 7;
      }

      #YRQNL0tddKkMGuSB {
        grid-template-columns: 3.33333333rem 0 0 0 7.6264652rem 78.08040293rem 7.6264652rem 0 0 0 3.33333333rem;
        grid-template-rows: minmax(5rem, max-content) minmax(26.2837812rem, max-content) 0 minmax(27.21233589rem, max-content) minmax(0.87813171rem, max-content) minmax(26.2534491rem, max-content) minmax(0.83333333rem, max-content) minmax(24.83951558rem, max-content) minmax(5rem, max-content) minmax(78.22262588rem, max-content) minmax(5rem, max-content);
      }

      #contact {
        min-height: 15.55724925vh;
      }
    }

    @media (min-width: 480.05px) and (max-width: 768px) {
      #V1PkVSJklNjNwezR {
        grid-area: 2 / 2 / 4 / 4;
      }

      #r7vMN3Xx0kj8k2IH {
        margin-left: -1.02698078%;
        clip-path: polygon(calc(1.00631152% + 0%) calc((0.00556612 * 275.68868135rem) + 0%), calc(100% - (1.00631152% + 0%)) calc((0.00556612 * 275.68868135rem) + 0%), calc(100% - (1.00631152% + 0%)) calc(100% - ((0.00556612 * 275.68868135rem) + 0%)), calc(1.00631152% + 0%) calc(100% - ((0.00556612 * 275.68868135rem) + 0%)));
        margin-top: -0.55661177%;
        margin-bottom: -0.55661177%;
        grid-area: 3 / 3 / 5 / 5;
        margin-right: -1.02698078%;
      }

      #XYGJy2jmn2zLu1UL {
        grid-template-columns: 0 0 275.68868135% 0;
        left: -87.84434068%;
        grid-template-rows: 0 0 100% 0;
      }

      #tfT6yyPb1ZV1d9se {
        grid-area: 2 / 2 / 5 / 3;
      }

      #T8oldhrmylbPLWbc {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08333333em - var(--ffsd)));
      }

      #BavEe7O215xM5qzQ {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333333em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333333em) * -0.05);
      }

      #yIPeyou0JDxQXCdz {
        min-width: 24.42818634rem;
      }

      #QqxdLod3szIO71dV {
        grid-area: 3 / 4 / 4 / 5;
      }

      #unapl4vsnFc9yPsN {
        grid-template-columns: 0 3.67120262rem 2.33667228rem 24.36308217rem;
        grid-template-rows: 0 minmax(1.18460117rem, max-content) minmax(5rem, max-content) minmax(1.18460117rem, max-content);
        grid-area: 2 / 4 / 3 / 6;
      }

      #vwyAQYfZVZRL5z6z {
        grid-area: 2 / 4 / 3 / 6;
      }

      #Q4df3GZJrZ51IXjK {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(12.79647135em - var(--ffsd)));
      }

      #JWKnk5WEUL0CTval {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 12.79647135em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 12.79647135em) * 0.05);
      }

      #sGGSsRQl19Yu8XHn {
        min-width: 89.58484915rem;
      }

      #wOLfb0jH9BTxG4yx {
        grid-area: 4 / 2 / 5 / 9;
      }

      #MYBMSLPxXz5pfuz1 {
        grid-area: 2 / 2 / 5 / 5;
      }

      #FD05YrJEyDGvbuWI {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(3.11898437em - var(--ffsd)));
      }

      #kvNVd7MeEhqbwd9q {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 3.11898437em) * 0.1);
      }

      #nWXLDGwPaZTckdiu {
        min-width: 43.35996784rem;
      }

      #MjwwCMUDU9FSXyaP {
        grid-area: 3 / 3 / 4 / 4;
      }

      #kB1woNSaTg7J7n0Q {
        grid-template-columns: 0 0.52083333rem 43.29486367rem 0.52083333rem;
        grid-template-rows: 0 minmax(0.52083333rem, max-content) minmax(7.51015302rem, max-content) minmax(0.52083333rem, max-content);
      }

      #eg75sqrZoYR01tzO {
        grid-template-columns: 0 44.33653034rem;
        grid-template-rows: 0 minmax(8.55181969rem, max-content);
        grid-area: 6 / 3 / 7 / 7;
      }

      #iI6EKIHWr4zPPhxU {
        grid-area: 6 / 3 / 7 / 7;
      }

      #DCPfcD9PThZmbqWt {
        grid-area: 2 / 2 / 7 / 7;
      }

      #G0zLjOsXU7kDtfAT {
        grid-area: 2 / 2 / 7 / 7;
      }

      #hWUU6SVK721sC3IZ {
        grid-area: 3 / 3 / 5 / 4;
      }

      #OKGpBJexAmp9oE74 {
        font-size: max(0px, calc(2.25695312em - var(--ffsd)));
      }

      #kfmLqOmvtD9Dhgus {
        font-size: max(0px, calc(2.25695312em - var(--ffsd)));
      }

      #xvtGfSYKiAxKiWM5 {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(0px, 2.25695312em) * 0.05);
      }

      #bcGNc4zpjJ1e5Gcu {
        min-width: 16.07124295rem;
      }

      #WMHh43EoIXRfqJ5f {
        grid-area: 4 / 5 / 6 / 6;
      }

      #A0T5EBm235zwQ00p {
        grid-template-columns: 0 1.75797876rem 4.37710118rem 1.79479324rem 16.00613878rem 2.37444804rem;
        grid-template-rows: 0 minmax(1.51093164rem, max-content) minmax(0.13888867rem, max-content) minmax(4.95076386rem, max-content) minmax(0.22284812rem, max-content) minmax(1.64982031rem, max-content);
      }

      #Ybiycu5KGDu4sVSM {
        grid-area: 2 / 2 / 7 / 7;
      }

      #SKzyVpcY3vmuLH6M {
        grid-area: 4 / 3 / 5 / 4;
      }

      #V4RiPa246S53Tecs {
        font-size: max(0px, calc(2.25695312em - var(--ffsd)));
      }

      #ytyB6EoLIADnw05m {
        font-size: max(0px, calc(2.25695312em - var(--ffsd)));
      }

      #XFkGj050kKhxTQeY {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(0px, 2.25695312em) * 0.05);
      }

      #dLHkhTV2wQWxNTSo {
        min-width: 16.07124295rem;
      }

      #qNqUZ3sU2sipgESZ {
        grid-area: 3 / 5 / 6 / 6;
      }

      #gNpfPXxzNa5gPVsu {
        grid-template-columns: 0 2.37444804rem 4.24652795rem 1.30889718rem 16.00613878rem 2.37444804rem;
        grid-template-rows: 0 minmax(1.64982031rem, max-content) minmax(0.22284812rem, max-content) minmax(4.72791574rem, max-content) minmax(0.22284812rem, max-content) minmax(1.64982031rem, max-content);
      }

      #PUVfIJMM631qA3Y3 {
        grid-template-columns: 0 1.6291894rem 0 26.31046rem 0 42.0603506rem;
        grid-template-rows: 0 minmax(47.34078082rem, max-content) minmax(8.47325259rem, max-content) minmax(2.1200006rem, max-content) minmax(8.47325259rem, max-content) minmax(3.59271339rem, max-content);
      }

      #SAI6BBGmVYGDQt1c {
        grid-area: 2 / 3 / 5 / 4;
      }

      #nLAzXlr1bzrAm8YR {
        grid-template-columns: 0 14.7844194rem 40.4311612rem 14.7844194rem;
        grid-template-rows: 0 minmax(4.03581267rem, max-content) minmax(70rem, max-content) minmax(5.96418733rem, max-content);
        grid-area: 8 / 5 / 9 / 8;
      }

      #LarSXPHokbk2xrCp {
        grid-area: 8 / 5 / 9 / 8;
      }

      #ilgtogNyHpvKkL8t {
        grid-template-columns: 5.24012751rem 0 0.46418765rem 9.29568484rem 21.07527222rem 13.50138562rem 35.42334216rem 9.75987249rem 5.24012751rem;
        grid-template-rows: minmax(4.16666667rem, max-content) minmax(7.36920233rem, max-content) minmax(8.35445684rem, max-content) minmax(29.40464714rem, max-content) minmax(8.81907406rem, max-content) minmax(8.55181969rem, max-content) minmax(4.16666667rem, max-content) minmax(80rem, max-content) minmax(4.16666667rem, max-content);
      }

      #home {
        min-height: 17.36801603vh;
      }

      #YZZMOPq5rNpb7QCk {
        grid-area: 2 / 2 / 3 / 3;
      }

      #IO7F62or5XVGkuQW {
        grid-template-columns: 0 246.21064294%;
        left: -73.10532147%;
        grid-template-rows: 0 100%;
      }

      #EmNxSBqrUi8bFcwv {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(9.72222656em - var(--ffsd)));
      }

      #fXpPkNxuVTo02ZMi {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 9.72222656em) * 0.045);
      }

      #C3ZjmOA5zLmTvu1Y {
        min-width: 91.73177083rem;
      }

      #YWLUDDpnPevptUDU {
        grid-area: 2 / 2 / 3 / 6;
      }

      #DxNX2e9M3t7apqoR {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.77777344em - var(--ffsd)));
      }

      #lyCt6EK37OU9rAcz {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.15);
      }

      #rqEhnPH2xfPMqRX2 {
        min-width: 91.73177083rem;
      }

      #bHCDSflBLaOvSWBI {
        grid-area: 4 / 3 / 5 / 7;
      }

      #BfwUqEZh95gLLu8l {
        grid-area: 2 / 2 / 4 / 5;
      }

      #smrqivlevH9YdFxA {
        grid-area: 3 / 3 / 5 / 4;
      }

      #CQTUwGBM7FuGM1Um {
        grid-template-columns: 0 48.29440325rem 29.1884439rem 1.44944452rem;
        grid-template-rows: 0 minmax(42.1131812rem, max-content) minmax(29.24161046rem, max-content) 0;
        grid-area: 6 / 4 / 7 / 5;
      }

      #cdwSjqqOEBCoUrOf {
        grid-area: 6 / 4 / 7 / 5;
      }

      #NXqjaFCpzaOOtdPU {
        grid-template-columns: 4.16666667rem 0 6.3671875rem 78.93229167rem 6.3671875rem 0 4.16666667rem;
        grid-template-rows: minmax(4.16666667rem, max-content) minmax(16.74774471rem, max-content) minmax(4.92006086rem, max-content) minmax(19.3442744rem, max-content) minmax(17.72569092rem, max-content) minmax(71.35479167rem, max-content) minmax(4.16666667rem, max-content);
      }

      #about {
        min-height: 15.51093926vh;
      }

      #y0xdiF8Gd8AYedtf {
        grid-area: 2 / 2 / 3 / 3;
      }

      #E1SM9jAHpWgnkuEN {
        grid-template-columns: 0 302.8427777%;
        left: -101.42138885%;
        grid-template-rows: 0 100%;
      }

      #MGrHmHL1Ak6ngcrA {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(9.72222656em - var(--ffsd)));
      }

      #tOhYscnGCWArdh1C {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 9.72222656em) * 0.045);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 9.72222656em) * 0.045);
      }

      #zIsf8m6Lnzsm2uob {
        min-width: 91.73177083rem;
      }

      #Vjxi9enmN4GKXvjU {
        grid-area: 2 / 2 / 3 / 9;
      }

      #OZu3bZzneaGtLHwR {
        display: block;
      }

      #Gen2kkyU64l8vpFu {
        display: none;
      }

      #Mwc8GSrJOgnXfRM6 {
        grid-area: 2 / 2 / 7 / 7;
      }

      #tvczyqODUZGkxznJ {
        grid-area: 2 / 2 / 5 / 5;
      }

      #RcH6wUArHfuJ8sXl {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.77777344em - var(--ffsd)));
      }

      #MT3EMpvTUaYvOeN0 {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.05);
      }

      #BrQmGSUIyw3kRSIl {
        min-width: 3.14025879rem;
      }

      #F6jnuoMur73zkQOk {
        grid-area: 3 / 3 / 4 / 4;
      }

      #KCRRsM9AKpvwQmhT {
        grid-template-columns: 0 2.31743755rem 3.07515462rem 2.31743755rem;
        grid-template-rows: 0 minmax(2.23609104rem, max-content) minmax(3.23784766rem, max-content) minmax(2.23609104rem, max-content);
      }

      #VSPZrwey5ta2PsRK {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.77776042em - var(--ffsd)));
      }

      #FwnhbEOBFWPfZADY {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77776042em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77776042em) * -0.05);
      }

      #FSpu6gxGdAWnZAZT {
        min-width: 42.14619987rem;
      }

      #qk0ICm39BL3jlBT3 {
        grid-area: 5 / 3 / 6 / 6;
      }

      #COxdKC2a8KiczNgu {
        grid-template-columns: 0 8.60354937rem 0 7.71002973rem 34.37106597rem 8.60354937rem;
        grid-template-rows: 0 minmax(6.01536193rem, max-content) minmax(7.71002973rem, max-content) minmax(5.43594206rem, max-content) minmax(10.26909896rem, max-content) minmax(10rem, max-content);
      }

      #ROE8mWEsRK3HhzmT {
        grid-template-columns: 0 59.28819444rem;
        grid-template-rows: 0 minmax(39.43043268rem, max-content);
        grid-area: 4 / 3 / 5 / 6;
      }

      #BRpQnQIlxbOgdkxB {
        grid-area: 4 / 3 / 5 / 6;
      }

      #xY4x0yK7QGzXENti {
        display: block;
      }

      #XOvAWaF962YJaLYi {
        display: none;
      }

      #IRflFs60Z6IkegYO {
        grid-area: 2 / 2 / 7 / 7;
      }

      #QKr52SEnpCeSumKk {
        grid-area: 2 / 2 / 5 / 5;
      }

      #GIgokzRGzuQ5vwPb {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.77777344em - var(--ffsd)));
      }

      #LR8FtwqsgUwTynw7 {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.05);
      }

      #WmyHRLRMhLm5xAfE {
        min-width: 4.43329777rem;
      }

      #N7pAvJj1PFRyXOvl {
        grid-area: 3 / 3 / 4 / 4;
      }

      #JHXUPsoXENtzUvZZ {
        grid-template-columns: 0 1.67091806rem 4.3681936rem 1.67091806rem;
        grid-template-rows: 0 minmax(2.23609104rem, max-content) minmax(3.23784766rem, max-content) minmax(2.23609104rem, max-content);
      }

      #KhSgB0wHQxHLNVJH {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.77776042em - var(--ffsd)));
      }

      #aSEd131TVZSH343o {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77776042em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77776042em) * -0.05);
      }

      #EqYCjgD3Dznoc9Fi {
        min-width: 41.17990352rem;
      }

      #cfG6CdAXhSAVwrOE {
        grid-area: 5 / 3 / 6 / 6;
      }

      #uNWkFl1h7Kx88bUO {
        grid-template-columns: 0 9.08669755rem 0 7.71002973rem 33.40476963rem 9.08669755rem;
        grid-template-rows: 0 minmax(6.01536193rem, max-content) minmax(7.71002973rem, max-content) minmax(5.43594206rem, max-content) minmax(10.26909896rem, max-content) minmax(10rem, max-content);
      }

      #bcfWdUD1lDoDHeTG {
        grid-template-columns: 0 59.28819444rem;
        grid-template-rows: 0 minmax(39.43043268rem, max-content);
        grid-area: 6 / 4 / 7 / 7;
      }

      #QHtE4ZDOQr1grhXf {
        grid-area: 6 / 4 / 7 / 7;
      }

      #RogP5gSzgTNO2Mvk {
        display: block;
      }

      #FqaL5HhvuaqKYEpU {
        display: none;
      }

      #hLvDrJoBo1vXNtbI {
        grid-area: 2 / 2 / 7 / 7;
      }

      #DsOY97bDsNYtojnA {
        grid-area: 2 / 2 / 5 / 5;
      }

      #Lzd6TiKVutnhnweZ {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.77777344em - var(--ffsd)));
      }

      #QHaAhPno4VSbeyhq {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.05);
      }

      #sADlAHndSmaPdnPL {
        min-width: 4.43329777rem;
      }

      #FO7HqEAUZD26skhq {
        grid-area: 3 / 3 / 4 / 4;
      }

      #Qlad3DMmujstOt3B {
        grid-template-columns: 0 1.67091806rem 4.3681936rem 1.67091806rem;
        grid-template-rows: 0 minmax(2.23609104rem, max-content) minmax(3.23784766rem, max-content) minmax(2.23609104rem, max-content);
      }

      #tEYMpNJpB7liYEWd {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.77776042em - var(--ffsd)));
      }

      #F7SLL6FeLL2XltMA {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77776042em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77776042em) * -0.05);
      }

      #adcVNXMIKHgyhdy1 {
        min-width: 39.730459rem;
      }

      #kLAiTL7PBno2WmOc {
        grid-area: 5 / 3 / 6 / 6;
      }

      #o37c4mED4DturuXU {
        grid-template-columns: 0 9.81141981rem 0 7.71002973rem 31.95532511rem 9.81141981rem;
        grid-template-rows: 0 minmax(6.01536193rem, max-content) minmax(7.71002973rem, max-content) minmax(5.43594206rem, max-content) minmax(10.26909896rem, max-content) minmax(10rem, max-content);
      }

      #ZCzeiv9LaKupDtu5 {
        grid-template-columns: 0 59.28819444rem;
        grid-template-rows: 0 minmax(39.43043268rem, max-content);
        grid-area: 8 / 5 / 9 / 8;
      }

      #qAOgFiF1XPlKSl5h {
        grid-area: 8 / 5 / 9 / 8;
      }

      #PHy7cS4BQMpHR0eb {
        grid-template-columns: 4.16666667rem 16.18923611rem 0 0 59.28819444rem 0 0 16.18923611rem 4.16666667rem;
        grid-template-rows: minmax(4.16666667rem, max-content) minmax(16.63052331rem, max-content) minmax(18.67743679rem, max-content) minmax(39.43043268rem, max-content) minmax(4.16666667rem, max-content) minmax(39.43043268rem, max-content) minmax(4.16666667rem, max-content) minmax(39.43043268rem, max-content) minmax(4.16666667rem, max-content);
      }

      #features {
        min-height: 19.07868756vh;
      }

      #IatESsvDunEGGpJK {
        grid-area: 2 / 2 / 4 / 4;
      }

      #oJy7123E1qgMVkAm {
        margin-left: 0%;
        clip-path: polygon(calc(0% + 0%) calc((0 * 283.19311266rem) + 0%), calc(100% - (0.07244318% + 0%)) calc((0 * 283.19311266rem) + 0%), calc(100% - (0.07244318% + 0%)) calc(100% - ((0 * 283.19311266rem) + 0%)), calc(0% + 0%) calc(100% - ((0 * 283.19311266rem) + 0%)));
        margin-top: 0%;
        margin-bottom: 0%;
        grid-area: 3 / 3 / 5 / 5;
        margin-right: -0.0724957%;
      }

      #Wge4EodMgbi2xniR {
        grid-template-columns: 0 0 283.19311266% 0;
        left: -91.59655633%;
        grid-template-rows: 0 0 100% 0;
      }

      #kSKF7BAXqkvkOlGF {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(8.65832878em - var(--ffsd)));
      }

      #gXRhGkyi6pahAoPc {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 8.65832878em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 8.65832878em) * -0.05);
      }

      #GGGrZbWYokQF8N3k {
        min-width: 91.73177083rem;
      }

      #Qp939bx8mnM2p2Cc {
        grid-area: 2 / 2 / 3 / 9;
      }

      #CSl1nt0lSwFV3EgA {
        grid-area: 2 / 2 / 3 / 5;
      }

      #IdWDhbczDqsCDMQX {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.77777344em - var(--ffsd)));
      }

      #TwnkaULX0LlgWVXI {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.1);
      }

      #cMUjuv9swqKtqyHU {
        min-width: 37.87841758rem;
      }

      #nSxnyNdmQqBtBEYo {
        grid-area: 4 / 4 / 5 / 7;
      }

      #TY1SNEoXzhbNc9cA {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.77777344em - var(--ffsd)));
      }

      #FyIS54VabpVsOS6z {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.05);
      }

      #ULRdepXwpXiCxFVE {
        min-width: 37.87841758rem;
      }

      #U0GQGzJG8kFcjS9B {
        grid-area: 6 / 3 / 7 / 6;
      }

      #y1hCAJ8u5N5gDLjD {
        grid-template-columns: 0 0 0 3.92594602rem 33.88736739rem 0;
        grid-template-rows: 0 minmax(3.10149736rem, max-content) minmax(7.16145833rem, max-content) minmax(18.32465365rem, max-content) minmax(7.21787989rem, max-content) minmax(3.23784766rem, max-content);
        grid-area: 4 / 3 / 5 / 6;
      }

      #fd54UyAF4YB9XBlb {
        grid-area: 4 / 3 / 5 / 6;
      }

      #ihZ9bxvI3CF6FopU {
        grid-area: 2 / 2 / 3 / 5;
      }

      #FtcQuUHAQ47D9rL1 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.77777344em - var(--ffsd)));
      }

      #TGeAucpZ8hbzS8Eq {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.1);
      }

      #IZ6dzRwhXBzyCZQV {
        min-width: 37.87841758rem;
      }

      #IRO1CeJz4nzQ7Gh6 {
        grid-area: 4 / 4 / 5 / 7;
      }

      #rsBCMfnq8TopGP3W {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.77777344em - var(--ffsd)));
      }

      #Lk6zOOoeH3Asky9b {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.05);
      }

      #Bi2ZWiMpPtgSdBTn {
        min-width: 37.87841758rem;
      }

      #VRRl1HAKFIagkGMZ {
        grid-area: 6 / 3 / 7 / 6;
      }

      #YBpgzhvDyPGbx5xn {
        grid-template-columns: 0 0 0 3.92594602rem 33.88736739rem 0;
        grid-template-rows: 0 minmax(3.10149736rem, max-content) minmax(7.16145833rem, max-content) minmax(18.32465365rem, max-content) minmax(7.21787989rem, max-content) minmax(3.23784766rem, max-content);
        grid-area: 6 / 4 / 7 / 7;
      }

      #ZIXDPoQ2WtjvIngt {
        grid-area: 6 / 4 / 7 / 7;
      }

      #ChWmt3aNBB5GO5pO {
        grid-area: 2 / 2 / 3 / 5;
      }

      #DbsIjPDTRJ3OijpA {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.77777344em - var(--ffsd)));
      }

      #zp3K0Essj8XG0E6g {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.1);
      }

      #s1yXNf4veM4LmPh9 {
        min-width: 37.87841758rem;
      }

      #wLRFObROr4zUNB9N {
        grid-area: 4 / 4 / 5 / 7;
      }

      #dtnW85p2bntj1qGw {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.77777344em - var(--ffsd)));
      }

      #Th82MjKcstJf96L6 {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.05);
      }

      #NF9X5CkjfGFOlshY {
        min-width: 37.87841758rem;
      }

      #CurpJPQbGg4l85mv {
        grid-area: 6 / 3 / 7 / 6;
      }

      #L5M1zvrXhqJLlVkx {
        grid-template-columns: 0 0 0 3.92594602rem 33.88736739rem 0;
        grid-template-rows: 0 minmax(3.10149736rem, max-content) minmax(7.16145833rem, max-content) minmax(18.32465365rem, max-content) minmax(7.21787989rem, max-content) minmax(3.23784766rem, max-content);
        grid-area: 8 / 5 / 9 / 8;
      }

      #yivxW5N1n0QRSwmW {
        grid-area: 8 / 5 / 9 / 8;
      }

      #h6Qrzjb0fdU5uBxd {
        grid-template-columns: 4.16666667rem 26.92667663rem 0 0 37.81331341rem 0 0 26.92667663rem 4.16666667rem;
        grid-template-rows: minmax(4.16666667rem, max-content) minmax(10.38225887rem, max-content) minmax(15.03944633rem, max-content) minmax(39.04333688rem, max-content) minmax(4.16666667rem, max-content) minmax(39.04333688rem, max-content) minmax(4.16666667rem, max-content) minmax(39.04333688rem, max-content) minmax(4.16666667rem, max-content);
      }

      #reviews {
        min-height: 17.8407851vh;
      }

      #vgeDbPpajJDWoPLN {
        grid-area: 2 / 2 / 3 / 3;
      }

      #gpaDAwZ8LBiqcTJT {
        grid-template-columns: 0 232.22969111%;
        left: -66.11484555%;
        grid-template-rows: 0 100%;
      }

      #Bfw4EiVkU5zDhsRi {
        grid-area: 2 / 2 / 4 / 5;
      }

      #nmSNBU7ZUIIwQbrl {
        grid-area: 3 / 3 / 5 / 4;
      }

      #Fzm1k8dxHuECEAkH {
        grid-template-columns: 0 48.29440325rem 29.1884439rem 1.44944452rem;
        grid-template-rows: 0 minmax(42.1131812rem, max-content) minmax(29.24161046rem, max-content) 0;
      }

      #OSVNEWiyGg3XQty7 {
        grid-template-columns: 0 78.93229167rem;
        grid-template-rows: 0 minmax(71.35479167rem, max-content);
        grid-area: 2 / 4 / 3 / 5;
      }

      #YVHvr7RAsRc3kNsU {
        grid-area: 2 / 4 / 3 / 5;
      }

      #NBwtsHzsv6WkHCkn {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(9.72222656em - var(--ffsd)));
      }

      #ns7tDsp3tuVuTws2 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(9.72222656em - var(--ffsd)));
      }

      #Xvh7WwEGuZyf5Jtu {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 9.72222656em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 9.72222656em) * 0.1);
      }

      #SmENYS7IUryuNwaa {
        min-width: 91.73177083rem;
      }

      #HkXDkeXDgCykc6j5 {
        grid-area: 4 / 2 / 5 / 6;
      }

      #FqzNnbvG4GJrUZO5 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.77777344em - var(--ffsd)));
      }

      #qGqBw3uwcaHKttxw {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.15);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.15);
      }

      #kWBlFAEmyjuE6LTx {
        min-width: 91.73177083rem;
      }

      #bcOBdfYxxNv2D3Xi {
        grid-area: 6 / 3 / 7 / 7;
      }

      #ApWkf18irvr3hSQ6 {
        grid-template-columns: 4.16666667rem 0 6.3671875rem 78.93229167rem 6.3671875rem 0 4.16666667rem;
        grid-template-rows: minmax(4.16666667rem, max-content) minmax(71.35479167rem, max-content) minmax(4.16666667rem, max-content) minmax(19.44445312rem, max-content) minmax(8.10811605rem, max-content) minmax(19.15808774rem, max-content) minmax(4.16666667rem, max-content);
      }

      #company {
        min-height: 14.63015811vh;
      }

      #vE2ScT5xaOi4SF5Q {
        grid-area: 2 / 2 / 3 / 3;
      }

      #BL7av49lvFD4fcoB {
        grid-template-columns: 0 247.17057892%;
        left: -73.58528946%;
        grid-template-rows: 0 100%;
      }

      #a97fRpMiPe1Gd8DT {
        display: block;
      }

      #DHsv4D8dGBkxJKte {
        display: none;
      }

      #kNgVYRt4vPeMTmyv {
        display: none;
      }

      #r9FJIgJYy9PBxwVk {
        grid-area: 2 / 2 / 5 / 5;
      }

      #LFHHQbqXP9kNQfU7 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(9.72222656em - var(--ffsd)));
      }

      #PAZiAcdjP24jowsV {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 9.72222656em) * 0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 9.72222656em) * 0.1);
      }

      #x8EyTnvTGLNhIVXw {
        min-width: 63.59945345rem;
      }

      #B8wmoKRFpHKpZizV {
        grid-area: 3 / 3 / 4 / 4;
      }

      #Tb08xKPLmzqDu5nQ {
        grid-template-columns: 0 4.16666667rem 63.53434928rem 4.16666667rem;
        grid-template-rows: 0 minmax(3.53024949rem, max-content) minmax(11.24885806rem, max-content) minmax(4.34758983rem, max-content);
      }

      #zC9IlUBJibglXmkI {
        grid-template-columns: 0 71.86768262rem;
        grid-template-rows: 0 minmax(19.12669738rem, max-content);
        grid-area: 2 / 2 / 3 / 8;
      }

      #rTIVi9GOIrNJyZ6v {
        grid-area: 2 / 2 / 3 / 8;
      }

      #KRkPopCraFQRyOf1 {
        display: block;
      }

      #l1WXjOdvui3ngpfP {
        display: none;
      }

      #fTmpltE79MpZ2KBV {
        display: none;
      }

      #kdABfMvPxfrLEOHU {
        grid-area: 2 / 2 / 7 / 7;
      }

      #t3lsHEDejp33ni0j {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(3.12501302em - var(--ffsd)));
      }

      #YbTnU5Sp7bxnVDmm {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 3.12501302em) * 0.1);
      }

      #P46znYsbwZsmM4NH {
        min-width: 63.59945345rem;
      }

      #UqMe3ybdMi08zzBy {
        grid-area: 3 / 4 / 4 / 6;
      }

      #EkX9AZed4PmkBVt9 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.77777344em - var(--ffsd)));
      }

      #sulHgf0yB1l7bZ7Z {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.15);
      }

      #TAVEK9EhOL3Rwq2w {
        min-width: 63.59945345rem;
      }

      #il7wrKoIQwxPF3Jb {
        grid-area: 5 / 3 / 6 / 5;
      }

      #lsIPLR6Jwatj7uss {
        grid-template-columns: 0 4.16666667rem 0 63.53434928rem 0 4.16666667rem;
        grid-template-rows: 0 minmax(4.86818025rem, max-content) minmax(3.12501302rem, max-content) minmax(2.43771659rem, max-content) minmax(3.2031263rem, max-content) minmax(5.49266121rem, max-content);
        grid-area: 4 / 3 / 5 / 9;
      }

      #ptO4kiHjpRmIuPZP {
        grid-area: 4 / 3 / 5 / 9;
      }

      #lIhtNJUExvnzBWz7 {
        display: block;
      }

      #NzdDYuKIiItkGfAA {
        display: none;
      }

      #okwNDTPp1bn31rBe {
        display: none;
      }

      #agBeVOoGKQtG2jxY {
        grid-area: 2 / 2 / 7 / 7;
      }

      #GVSV7UrJR52kQrvD {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(3.12501302em - var(--ffsd)));
      }

      #wb74OMT2bdQ9Xw5L {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 3.12501302em) * 0.1);
      }

      #h0EGqo94WNpUKWiv {
        min-width: 63.59945345rem;
      }

      #RkpYWUshQjwy14pJ {
        grid-area: 3 / 4 / 4 / 6;
      }

      #bLznJ6KSmkPyyBqs {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.77777344em - var(--ffsd)));
      }

      #Oliy3RHyQSSuFvPz {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.77777344em) * -0.15);
      }

      #UbbnBmd3KyXKTAX9 {
        min-width: 63.59945345rem;
      }

      #JPcA8VFk8OF0ifMR {
        grid-area: 5 / 3 / 6 / 5;
      }

      #PmnrPqNjmF5d1Bfs {
        grid-template-columns: 0 4.16666667rem 0 63.53434928rem 0 4.16666667rem;
        grid-template-rows: 0 minmax(4.26887601rem, max-content) minmax(3.12501302rem, max-content) minmax(2.43771659rem, max-content) minmax(3.2031263rem, max-content) minmax(6.09196545rem, max-content);
        grid-area: 6 / 4 / 7 / 10;
      }

      #KvrElmXvAtWXYg4H {
        grid-area: 6 / 4 / 7 / 10;
      }

      #YVwuq5sxebgxJwQn {
        display: block;
      }

      #tRQLkAtD61GSvKbQ {
        display: none;
      }

      #f3wlcYGs6txlvsns {
        grid-area: 2 / 2 / 11 / 11;
      }

      #yruasGzZFRwySsjB {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(3.12501302em - var(--ffsd)));
      }

      #uq4nCiCkmn0NIOVd {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 3.12501302em) * 0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 3.12501302em) * 0.1);
      }

      #BcJk2oh9WURfrZF2 {
        min-width: 14.2593018rem;
      }

      #nIwAtMhxaMz0AEho {
        grid-area: 6 / 3 / 7 / 4;
      }

      #e6QtkDXDpJlnZh4J {
        grid-area: 4 / 5 / 9 / 6;
      }

      #hHb4Q6phZfQQboKc {
        grid-area: 5 / 7 / 10 / 8;
      }

      #Wkr0FTbwamDt0pHi {
        grid-area: 3 / 9 / 8 / 10;
      }

      #jXof2BTql7gUNcQk {
        grid-template-columns: 0 4.9069802rem 14.19419763rem 15.94918507rem 7.6115508rem 3.25520833rem 7.6115508rem 3.31679836rem 7.6115508rem 7.41066064rem;
        grid-template-rows: 0 minmax(5.75757329rem, max-content) 0 0 minmax(1.9307741rem, max-content) minmax(3.7500026rem, max-content) minmax(1.9307741rem, max-content) 0 0 minmax(5.75757329rem, max-content);
        grid-area: 8 / 5 / 9 / 11;
      }

      #fM4keex9JJO2fu6J {
        grid-area: 8 / 5 / 9 / 11;
      }

      #nxfR97sMUsXnrV4E {
        grid-area: 10 / 6 / 11 / 7;
      }

      #YRQNL0tddKkMGuSB {
        grid-template-columns: 14.06615869rem 0 0 0 11.53371539rem 48.80025183rem 11.53371539rem 0 0 0 14.06615869rem;
        grid-template-rows: minmax(4.16666667rem, max-content) minmax(19.12669738rem, max-content) 0 minmax(19.12669738rem, max-content) minmax(0.54883232rem, max-content) minmax(19.12669738rem, max-content) minmax(0.52083333rem, max-content) minmax(19.12669738rem, max-content) minmax(4.16666667rem, max-content) minmax(48.88914118rem, max-content) minmax(4.16666667rem, max-content);
      }

      #contact {
        min-height: 15.57141394vh;
      }
    }

    @media (min-width: 768.05px) and (max-width: 1024px) {
      #V1PkVSJklNjNwezR {
        grid-area: 2 / 2 / 4 / 4;
      }

      #r7vMN3Xx0kj8k2IH {
        margin-left: -1.02698078%;
        clip-path: polygon(calc(1.00631152% + 0%) calc((0.00556612 * 206.76651101rem) + 0%), calc(100% - (1.00631152% + 0%)) calc((0.00556612 * 206.76651101rem) + 0%), calc(100% - (1.00631152% + 0%)) calc(100% - ((0.00556612 * 206.76651101rem) + 0%)), calc(1.00631152% + 0%) calc(100% - ((0.00556612 * 206.76651101rem) + 0%)));
        margin-top: -0.55661177%;
        margin-bottom: -0.55661177%;
        grid-area: 3 / 3 / 5 / 5;
        margin-right: -1.02698078%;
      }

      #XYGJy2jmn2zLu1UL {
        grid-template-columns: 0 0 206.76651101% 0;
        left: -53.38325551%;
        grid-template-rows: 0 0 100% 0;
      }

      #tfT6yyPb1ZV1d9se {
        grid-area: 2 / 2 / 5 / 3;
      }

      #T8oldhrmylbPLWbc {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.5625em - var(--ffsd)));
      }

      #BavEe7O215xM5qzQ {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.5625em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.5625em) * -0.05);
      }

      #yIPeyou0JDxQXCdz {
        min-width: 18.32113975rem;
      }

      #QqxdLod3szIO71dV {
        grid-area: 3 / 4 / 4 / 5;
      }

      #unapl4vsnFc9yPsN {
        grid-template-columns: 0 2.75340196rem 1.75250421rem 18.27231163rem;
        grid-template-rows: 0 minmax(0.88845087rem, max-content) minmax(3.75rem, max-content) minmax(0.88845087rem, max-content);
        grid-area: 2 / 4 / 3 / 6;
      }

      #vwyAQYfZVZRL5z6z {
        grid-area: 2 / 4 / 3 / 6;
      }

      #Q4df3GZJrZ51IXjK {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(9.59735352em - var(--ffsd)));
      }

      #JWKnk5WEUL0CTval {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 9.59735352em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 9.59735352em) * 0.05);
      }

      #sGGSsRQl19Yu8XHn {
        min-width: 67.18863687rem;
      }

      #wOLfb0jH9BTxG4yx {
        grid-area: 4 / 2 / 5 / 9;
      }

      #MYBMSLPxXz5pfuz1 {
        grid-area: 2 / 2 / 5 / 5;
      }

      #FD05YrJEyDGvbuWI {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.33923828em - var(--ffsd)));
      }

      #kvNVd7MeEhqbwd9q {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.33923828em) * 0.1);
      }

      #nWXLDGwPaZTckdiu {
        min-width: 32.51997588rem;
      }

      #MjwwCMUDU9FSXyaP {
        grid-area: 3 / 3 / 4 / 4;
      }

      #kB1woNSaTg7J7n0Q {
        grid-template-columns: 0 0.390625rem 32.47114775rem 0.390625rem;
        grid-template-rows: 0 minmax(0.390625rem, max-content) minmax(5.63261477rem, max-content) minmax(0.390625rem, max-content);
      }

      #eg75sqrZoYR01tzO {
        grid-template-columns: 0 33.25239775rem;
        grid-template-rows: 0 minmax(6.41386477rem, max-content);
        grid-area: 6 / 3 / 7 / 7;
      }

      #iI6EKIHWr4zPPhxU {
        grid-area: 6 / 3 / 7 / 7;
      }

      #DCPfcD9PThZmbqWt {
        grid-area: 2 / 2 / 7 / 7;
      }

      #G0zLjOsXU7kDtfAT {
        grid-area: 2 / 2 / 7 / 7;
      }

      #hWUU6SVK721sC3IZ {
        grid-area: 3 / 3 / 5 / 4;
      }

      #OKGpBJexAmp9oE74 {
        font-size: max(0px, calc(1.69271484em - var(--ffsd)));
      }

      #kfmLqOmvtD9Dhgus {
        font-size: max(0px, calc(1.69271484em - var(--ffsd)));
      }

      #xvtGfSYKiAxKiWM5 {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(0px, 1.69271484em) * 0.05);
      }

      #bcGNc4zpjJ1e5Gcu {
        min-width: 12.05343221rem;
      }

      #WMHh43EoIXRfqJ5f {
        grid-area: 4 / 5 / 6 / 6;
      }

      #A0T5EBm235zwQ00p {
        grid-template-columns: 0 1.31848407rem 3.28282588rem 1.34609493rem 12.00460409rem 1.78083603rem;
        grid-template-rows: 0 minmax(1.13319873rem, max-content) minmax(0.1041665rem, max-content) minmax(3.71307289rem, max-content) minmax(0.16713609rem, max-content) minmax(1.23736523rem, max-content);
      }

      #Ybiycu5KGDu4sVSM {
        grid-area: 2 / 2 / 7 / 7;
      }

      #SKzyVpcY3vmuLH6M {
        grid-area: 4 / 3 / 5 / 4;
      }

      #V4RiPa246S53Tecs {
        font-size: max(0px, calc(1.69271484em - var(--ffsd)));
      }

      #ytyB6EoLIADnw05m {
        font-size: max(0px, calc(1.69271484em - var(--ffsd)));
      }

      #XFkGj050kKhxTQeY {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(0px, 1.69271484em) * 0.05);
      }

      #dLHkhTV2wQWxNTSo {
        min-width: 12.05343221rem;
      }

      #qNqUZ3sU2sipgESZ {
        grid-area: 3 / 5 / 6 / 6;
      }

      #gNpfPXxzNa5gPVsu {
        grid-template-columns: 0 1.78083603rem 3.18489596rem 0.98167288rem 12.00460409rem 1.78083603rem;
        grid-template-rows: 0 minmax(1.23736523rem, max-content) minmax(0.16713609rem, max-content) minmax(3.5459368rem, max-content) minmax(0.16713609rem, max-content) minmax(1.23736523rem, max-content);
      }

      #PUVfIJMM631qA3Y3 {
        grid-template-columns: 0 1.22189205rem 0 19.732845rem 0 31.54526295rem;
        grid-template-rows: 0 minmax(35.50558561rem, max-content) minmax(6.35493945rem, max-content) minmax(1.59000045rem, max-content) minmax(6.35493945rem, max-content) minmax(2.69453504rem, max-content);
      }

      #SAI6BBGmVYGDQt1c {
        grid-area: 2 / 3 / 5 / 4;
      }

      #nLAzXlr1bzrAm8YR {
        grid-template-columns: 0 11.08831455rem 30.3233709rem 11.08831455rem;
        grid-template-rows: 0 minmax(3.0268595rem, max-content) minmax(52.5rem, max-content) minmax(4.4731405rem, max-content);
        grid-area: 8 / 5 / 9 / 8;
      }

      #LarSXPHokbk2xrCp {
        grid-area: 8 / 5 / 9 / 8;
      }

      #ilgtogNyHpvKkL8t {
        grid-template-columns: 16.43009563rem 0 0.34814074rem 6.97176363rem 15.80645417rem 10.12603922rem 26.56750662rem 7.31990437rem 16.43009563rem;
        grid-template-rows: minmax(3.125rem, max-content) minmax(5.52690175rem, max-content) minmax(6.26584263rem, max-content) minmax(22.05348535rem, max-content) minmax(6.61430555rem, max-content) minmax(6.41386477rem, max-content) minmax(3.125rem, max-content) minmax(60rem, max-content) minmax(3.125rem, max-content);
      }

      #home {
        min-height: 17.53042445vh;
      }

      #YZZMOPq5rNpb7QCk {
        grid-area: 2 / 2 / 3 / 3;
      }

      #IO7F62or5XVGkuQW {
        grid-template-columns: 0 184.65798221%;
        left: -42.3289911%;
        grid-template-rows: 0 100%;
      }

      #EmNxSBqrUi8bFcwv {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(7.29166992em - var(--ffsd)));
      }

      #fXpPkNxuVTo02ZMi {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 7.29166992em) * 0.045);
      }

      #C3ZjmOA5zLmTvu1Y {
        min-width: 93.79882812rem;
      }

      #YWLUDDpnPevptUDU {
        grid-area: 2 / 2 / 3 / 6;
      }

      #DxNX2e9M3t7apqoR {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08333008em - var(--ffsd)));
      }

      #lyCt6EK37OU9rAcz {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.15);
      }

      #rqEhnPH2xfPMqRX2 {
        min-width: 93.79882812rem;
      }

      #bHCDSflBLaOvSWBI {
        grid-area: 4 / 3 / 5 / 7;
      }

      #BfwUqEZh95gLLu8l {
        grid-area: 2 / 2 / 4 / 5;
      }

      #smrqivlevH9YdFxA {
        grid-area: 3 / 3 / 5 / 4;
      }

      #CQTUwGBM7FuGM1Um {
        grid-template-columns: 0 36.22080244rem 21.89133292rem 1.08708339rem;
        grid-template-rows: 0 minmax(31.5848859rem, max-content) minmax(21.93120785rem, max-content) 0;
        grid-area: 6 / 4 / 7 / 5;
      }

      #cdwSjqqOEBCoUrOf {
        grid-area: 6 / 4 / 7 / 5;
      }

      #NXqjaFCpzaOOtdPU {
        grid-template-columns: 3.125rem 0 17.27539062rem 59.19921875rem 17.27539062rem 0 3.125rem;
        grid-template-rows: minmax(3.125rem, max-content) minmax(9.21125959rem, max-content) minmax(3.69004564rem, max-content) minmax(10.63935092rem, max-content) minmax(20.51267201rem, max-content) minmax(53.51609375rem, max-content) minmax(3.125rem, max-content);
      }

      #about {
        min-height: 15.65598215vh;
      }

      #y0xdiF8Gd8AYedtf {
        grid-area: 2 / 2 / 3 / 3;
      }

      #E1SM9jAHpWgnkuEN {
        grid-template-columns: 0 221.21612108%;
        left: -60.60806054%;
        grid-template-rows: 0 100%;
      }

      #MGrHmHL1Ak6ngcrA {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(7.29166992em - var(--ffsd)));
      }

      #tOhYscnGCWArdh1C {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 7.29166992em) * 0.045);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 7.29166992em) * 0.045);
      }

      #zIsf8m6Lnzsm2uob {
        min-width: 93.79882812rem;
      }

      #Vjxi9enmN4GKXvjU {
        grid-area: 2 / 2 / 3 / 9;
      }

      #OZu3bZzneaGtLHwR {
        display: block;
      }

      #Gen2kkyU64l8vpFu {
        display: none;
      }

      #Mwc8GSrJOgnXfRM6 {
        grid-area: 2 / 2 / 7 / 7;
      }

      #tvczyqODUZGkxznJ {
        grid-area: 2 / 2 / 5 / 5;
      }

      #RcH6wUArHfuJ8sXl {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08333008em - var(--ffsd)));
      }

      #MT3EMpvTUaYvOeN0 {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.05);
      }

      #BrQmGSUIyw3kRSIl {
        min-width: 2.35519409rem;
      }

      #F6jnuoMur73zkQOk {
        grid-area: 3 / 3 / 4 / 4;
      }

      #KCRRsM9AKpvwQmhT {
        grid-template-columns: 0 1.73807816rem 2.30636597rem 1.73807816rem;
        grid-template-rows: 0 minmax(1.67706828rem, max-content) minmax(2.42838574rem, max-content) minmax(1.67706828rem, max-content);
      }

      #VSPZrwey5ta2PsRK {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08332031em - var(--ffsd)));
      }

      #FwnhbEOBFWPfZADY {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08332031em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08332031em) * -0.05);
      }

      #FSpu6gxGdAWnZAZT {
        min-width: 31.6096499rem;
      }

      #qk0ICm39BL3jlBT3 {
        grid-area: 5 / 3 / 6 / 6;
      }

      #COxdKC2a8KiczNgu {
        grid-template-columns: 0 6.45266203rem 0 5.7825223rem 25.77829948rem 6.45266203rem;
        grid-template-rows: 0 minmax(4.51152145rem, max-content) minmax(5.7825223rem, max-content) minmax(4.07695654rem, max-content) minmax(7.70182422rem, max-content) minmax(7.5rem, max-content);
      }

      #ROE8mWEsRK3HhzmT {
        grid-template-columns: 0 44.46614583rem;
        grid-template-rows: 0 minmax(29.57282451rem, max-content);
        grid-area: 4 / 3 / 5 / 6;
      }

      #BRpQnQIlxbOgdkxB {
        grid-area: 4 / 3 / 5 / 6;
      }

      #xY4x0yK7QGzXENti {
        display: block;
      }

      #XOvAWaF962YJaLYi {
        display: none;
      }

      #IRflFs60Z6IkegYO {
        grid-area: 2 / 2 / 7 / 7;
      }

      #QKr52SEnpCeSumKk {
        grid-area: 2 / 2 / 5 / 5;
      }

      #GIgokzRGzuQ5vwPb {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08333008em - var(--ffsd)));
      }

      #LR8FtwqsgUwTynw7 {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.05);
      }

      #WmyHRLRMhLm5xAfE {
        min-width: 3.32497333rem;
      }

      #N7pAvJj1PFRyXOvl {
        grid-area: 3 / 3 / 4 / 4;
      }

      #JHXUPsoXENtzUvZZ {
        grid-template-columns: 0 1.25318855rem 3.2761452rem 1.25318855rem;
        grid-template-rows: 0 minmax(1.67706828rem, max-content) minmax(2.42838574rem, max-content) minmax(1.67706828rem, max-content);
      }

      #KhSgB0wHQxHLNVJH {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08332031em - var(--ffsd)));
      }

      #aSEd131TVZSH343o {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08332031em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08332031em) * -0.05);
      }

      #EqYCjgD3Dznoc9Fi {
        min-width: 30.88492764rem;
      }

      #cfG6CdAXhSAVwrOE {
        grid-area: 5 / 3 / 6 / 6;
      }

      #uNWkFl1h7Kx88bUO {
        grid-template-columns: 0 6.81502316rem 0 5.7825223rem 25.05357722rem 6.81502316rem;
        grid-template-rows: 0 minmax(4.51152145rem, max-content) minmax(5.7825223rem, max-content) minmax(4.07695654rem, max-content) minmax(7.70182422rem, max-content) minmax(7.5rem, max-content);
      }

      #bcfWdUD1lDoDHeTG {
        grid-template-columns: 0 44.46614583rem;
        grid-template-rows: 0 minmax(29.57282451rem, max-content);
        grid-area: 6 / 4 / 7 / 7;
      }

      #QHtE4ZDOQr1grhXf {
        grid-area: 6 / 4 / 7 / 7;
      }

      #RogP5gSzgTNO2Mvk {
        display: block;
      }

      #FqaL5HhvuaqKYEpU {
        display: none;
      }

      #hLvDrJoBo1vXNtbI {
        grid-area: 2 / 2 / 7 / 7;
      }

      #DsOY97bDsNYtojnA {
        grid-area: 2 / 2 / 5 / 5;
      }

      #Lzd6TiKVutnhnweZ {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08333008em - var(--ffsd)));
      }

      #QHaAhPno4VSbeyhq {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.05);
      }

      #sADlAHndSmaPdnPL {
        min-width: 3.32497333rem;
      }

      #FO7HqEAUZD26skhq {
        grid-area: 3 / 3 / 4 / 4;
      }

      #Qlad3DMmujstOt3B {
        grid-template-columns: 0 1.25318855rem 3.2761452rem 1.25318855rem;
        grid-template-rows: 0 minmax(1.67706828rem, max-content) minmax(2.42838574rem, max-content) minmax(1.67706828rem, max-content);
      }

      #tEYMpNJpB7liYEWd {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08332031em - var(--ffsd)));
      }

      #F7SLL6FeLL2XltMA {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08332031em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08332031em) * -0.05);
      }

      #adcVNXMIKHgyhdy1 {
        min-width: 29.79784425rem;
      }

      #kLAiTL7PBno2WmOc {
        grid-area: 5 / 3 / 6 / 6;
      }

      #o37c4mED4DturuXU {
        grid-template-columns: 0 7.35856485rem 0 5.7825223rem 23.96649383rem 7.35856485rem;
        grid-template-rows: 0 minmax(4.51152145rem, max-content) minmax(5.7825223rem, max-content) minmax(4.07695654rem, max-content) minmax(7.70182422rem, max-content) minmax(7.5rem, max-content);
      }

      #ZCzeiv9LaKupDtu5 {
        grid-template-columns: 0 44.46614583rem;
        grid-template-rows: 0 minmax(29.57282451rem, max-content);
        grid-area: 8 / 5 / 9 / 8;
      }

      #qAOgFiF1XPlKSl5h {
        grid-area: 8 / 5 / 9 / 8;
      }

      #PHy7cS4BQMpHR0eb {
        grid-template-columns: 3.125rem 24.64192708rem 0 0 44.46614583rem 0 0 24.64192708rem 3.125rem;
        grid-template-rows: minmax(3.125rem, max-content) minmax(9.14678782rem, max-content) minmax(14.00807759rem, max-content) minmax(29.57282451rem, max-content) minmax(3.125rem, max-content) minmax(29.57282451rem, max-content) minmax(3.125rem, max-content) minmax(29.57282451rem, max-content) minmax(3.125rem, max-content);
      }

      #features {
        min-height: 18.75551548vh;
      }

      #IatESsvDunEGGpJK {
        grid-area: 2 / 2 / 4 / 4;
      }

      #oJy7123E1qgMVkAm {
        margin-left: 0%;
        clip-path: polygon(calc(0% + 0%) calc((0 * 214.09663412rem) + 0%), calc(100% - (0.07244318% + 0%)) calc((0 * 214.09663412rem) + 0%), calc(100% - (0.07244318% + 0%)) calc(100% - ((0 * 214.09663412rem) + 0%)), calc(0% + 0%) calc(100% - ((0 * 214.09663412rem) + 0%)));
        margin-top: 0%;
        margin-bottom: 0%;
        grid-area: 3 / 3 / 5 / 5;
        margin-right: -0.0724957%;
      }

      #Wge4EodMgbi2xniR {
        grid-template-columns: 0 0 214.09663412% 0;
        left: -57.04831706%;
        grid-template-rows: 0 0 100% 0;
      }

      #kSKF7BAXqkvkOlGF {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(7.29166992em - var(--ffsd)));
      }

      #gXRhGkyi6pahAoPc {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 7.29166992em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 7.29166992em) * -0.05);
      }

      #GGGrZbWYokQF8N3k {
        min-width: 93.79882812rem;
      }

      #Qp939bx8mnM2p2Cc {
        grid-area: 2 / 2 / 3 / 9;
      }

      #CSl1nt0lSwFV3EgA {
        grid-area: 2 / 2 / 3 / 5;
      }

      #IdWDhbczDqsCDMQX {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08333008em - var(--ffsd)));
      }

      #TwnkaULX0LlgWVXI {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.1);
      }

      #cMUjuv9swqKtqyHU {
        min-width: 28.40881318rem;
      }

      #nSxnyNdmQqBtBEYo {
        grid-area: 4 / 4 / 5 / 7;
      }

      #TY1SNEoXzhbNc9cA {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08333008em - var(--ffsd)));
      }

      #FyIS54VabpVsOS6z {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.05);
      }

      #ULRdepXwpXiCxFVE {
        min-width: 28.40881318rem;
      }

      #U0GQGzJG8kFcjS9B {
        grid-area: 6 / 3 / 7 / 6;
      }

      #y1hCAJ8u5N5gDLjD {
        grid-template-columns: 0 0 0 2.94445951rem 25.41552554rem 0;
        grid-template-rows: 0 minmax(2.32612302rem, max-content) minmax(5.37109375rem, max-content) minmax(13.74349023rem, max-content) minmax(5.41340992rem, max-content) minmax(2.42838574rem, max-content);
        grid-area: 4 / 3 / 5 / 6;
      }

      #fd54UyAF4YB9XBlb {
        grid-area: 4 / 3 / 5 / 6;
      }

      #ihZ9bxvI3CF6FopU {
        grid-area: 2 / 2 / 3 / 5;
      }

      #FtcQuUHAQ47D9rL1 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08333008em - var(--ffsd)));
      }

      #TGeAucpZ8hbzS8Eq {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.1);
      }

      #IZ6dzRwhXBzyCZQV {
        min-width: 28.40881318rem;
      }

      #IRO1CeJz4nzQ7Gh6 {
        grid-area: 4 / 4 / 5 / 7;
      }

      #rsBCMfnq8TopGP3W {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08333008em - var(--ffsd)));
      }

      #Lk6zOOoeH3Asky9b {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.05);
      }

      #Bi2ZWiMpPtgSdBTn {
        min-width: 28.40881318rem;
      }

      #VRRl1HAKFIagkGMZ {
        grid-area: 6 / 3 / 7 / 6;
      }

      #YBpgzhvDyPGbx5xn {
        grid-template-columns: 0 0 0 2.94445951rem 25.41552554rem 0;
        grid-template-rows: 0 minmax(2.32612302rem, max-content) minmax(5.37109375rem, max-content) minmax(13.74349023rem, max-content) minmax(5.41340992rem, max-content) minmax(2.42838574rem, max-content);
        grid-area: 6 / 4 / 7 / 7;
      }

      #ZIXDPoQ2WtjvIngt {
        grid-area: 6 / 4 / 7 / 7;
      }

      #ChWmt3aNBB5GO5pO {
        grid-area: 2 / 2 / 3 / 5;
      }

      #DbsIjPDTRJ3OijpA {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08333008em - var(--ffsd)));
      }

      #zp3K0Essj8XG0E6g {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.1);
      }

      #s1yXNf4veM4LmPh9 {
        min-width: 28.40881318rem;
      }

      #wLRFObROr4zUNB9N {
        grid-area: 4 / 4 / 5 / 7;
      }

      #dtnW85p2bntj1qGw {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08333008em - var(--ffsd)));
      }

      #Th82MjKcstJf96L6 {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.05);
      }

      #NF9X5CkjfGFOlshY {
        min-width: 28.40881318rem;
      }

      #CurpJPQbGg4l85mv {
        grid-area: 6 / 3 / 7 / 6;
      }

      #L5M1zvrXhqJLlVkx {
        grid-template-columns: 0 0 0 2.94445951rem 25.41552554rem 0;
        grid-template-rows: 0 minmax(2.32612302rem, max-content) minmax(5.37109375rem, max-content) minmax(13.74349023rem, max-content) minmax(5.41340992rem, max-content) minmax(2.42838574rem, max-content);
        grid-area: 8 / 5 / 9 / 8;
      }

      #yivxW5N1n0QRSwmW {
        grid-area: 8 / 5 / 9 / 8;
      }

      #h6Qrzjb0fdU5uBxd {
        grid-template-columns: 3.125rem 32.69500747rem 0 0 28.35998506rem 0 0 32.69500747rem 3.125rem;
        grid-template-rows: minmax(3.125rem, max-content) minmax(8.74348926rem, max-content) minmax(11.27958475rem, max-content) minmax(29.28250266rem, max-content) minmax(3.125rem, max-content) minmax(29.28250266rem, max-content) minmax(3.125rem, max-content) minmax(29.28250266rem, max-content) minmax(3.125rem, max-content);
      }

      #reviews {
        min-height: 18.15189922vh;
      }

      #vgeDbPpajJDWoPLN {
        grid-area: 2 / 2 / 3 / 3;
      }

      #gpaDAwZ8LBiqcTJT {
        grid-template-columns: 0 167.35717774%;
        left: -33.67858887%;
        grid-template-rows: 0 100%;
      }

      #Bfw4EiVkU5zDhsRi {
        grid-area: 2 / 2 / 4 / 5;
      }

      #nmSNBU7ZUIIwQbrl {
        grid-area: 3 / 3 / 5 / 4;
      }

      #Fzm1k8dxHuECEAkH {
        grid-template-columns: 0 36.22080244rem 21.89133292rem 1.08708339rem;
        grid-template-rows: 0 minmax(31.5848859rem, max-content) minmax(21.93120785rem, max-content) 0;
      }

      #OSVNEWiyGg3XQty7 {
        grid-template-columns: 0 59.19921875rem;
        grid-template-rows: 0 minmax(53.51609375rem, max-content);
        grid-area: 2 / 4 / 3 / 5;
      }

      #YVHvr7RAsRc3kNsU {
        grid-area: 2 / 4 / 3 / 5;
      }

      #NBwtsHzsv6WkHCkn {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(7.29166992em - var(--ffsd)));
      }

      #ns7tDsp3tuVuTws2 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(7.29166992em - var(--ffsd)));
      }

      #Xvh7WwEGuZyf5Jtu {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 7.29166992em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 7.29166992em) * 0.1);
      }

      #SmENYS7IUryuNwaa {
        min-width: 93.79882812rem;
      }

      #HkXDkeXDgCykc6j5 {
        grid-area: 4 / 2 / 5 / 6;
      }

      #FqzNnbvG4GJrUZO5 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08333008em - var(--ffsd)));
      }

      #qGqBw3uwcaHKttxw {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.15);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.15);
      }

      #kWBlFAEmyjuE6LTx {
        min-width: 93.79882812rem;
      }

      #bcOBdfYxxNv2D3Xi {
        grid-area: 6 / 3 / 7 / 7;
      }

      #ApWkf18irvr3hSQ6 {
        grid-template-columns: 3.125rem 0 17.27539062rem 59.19921875rem 17.27539062rem 0 3.125rem;
        grid-template-rows: minmax(3.125rem, max-content) minmax(53.51609375rem, max-content) minmax(3.125rem, max-content) minmax(14.58333984rem, max-content) minmax(6.08108704rem, max-content) minmax(10.53694826rem, max-content) minmax(3.125rem, max-content);
      }

      #company {
        min-height: 14.18915639vh;
      }

      #vE2ScT5xaOi4SF5Q {
        grid-area: 2 / 2 / 3 / 3;
      }

      #BL7av49lvFD4fcoB {
        grid-template-columns: 0 185.37793419%;
        left: -42.6889671%;
        grid-template-rows: 0 100%;
      }

      #a97fRpMiPe1Gd8DT {
        display: block;
      }

      #DHsv4D8dGBkxJKte {
        display: none;
      }

      #kNgVYRt4vPeMTmyv {
        display: none;
      }

      #r9FJIgJYy9PBxwVk {
        grid-area: 2 / 2 / 5 / 5;
      }

      #LFHHQbqXP9kNQfU7 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(7.29166992em - var(--ffsd)));
      }

      #PAZiAcdjP24jowsV {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 7.29166992em) * 0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 7.29166992em) * 0.1);
      }

      #x8EyTnvTGLNhIVXw {
        min-width: 47.69959009rem;
      }

      #B8wmoKRFpHKpZizV {
        grid-area: 3 / 3 / 4 / 4;
      }

      #Tb08xKPLmzqDu5nQ {
        grid-template-columns: 0 3.125rem 47.65076196rem 3.125rem;
        grid-template-rows: 0 minmax(2.64768712rem, max-content) minmax(8.43664354rem, max-content) minmax(3.26069237rem, max-content);
      }

      #zC9IlUBJibglXmkI {
        grid-template-columns: 0 53.90076196rem;
        grid-template-rows: 0 minmax(14.34502303rem, max-content);
        grid-area: 2 / 2 / 3 / 8;
      }

      #rTIVi9GOIrNJyZ6v {
        grid-area: 2 / 2 / 3 / 8;
      }

      #KRkPopCraFQRyOf1 {
        display: block;
      }

      #l1WXjOdvui3ngpfP {
        display: none;
      }

      #fTmpltE79MpZ2KBV {
        display: none;
      }

      #kdABfMvPxfrLEOHU {
        grid-area: 2 / 2 / 7 / 7;
      }

      #t3lsHEDejp33ni0j {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.34375977em - var(--ffsd)));
      }

      #YbTnU5Sp7bxnVDmm {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.34375977em) * 0.1);
      }

      #P46znYsbwZsmM4NH {
        min-width: 47.69959009rem;
      }

      #UqMe3ybdMi08zzBy {
        grid-area: 3 / 4 / 4 / 6;
      }

      #EkX9AZed4PmkBVt9 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08333008em - var(--ffsd)));
      }

      #sulHgf0yB1l7bZ7Z {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.15);
      }

      #TAVEK9EhOL3Rwq2w {
        min-width: 47.69959009rem;
      }

      #il7wrKoIQwxPF3Jb {
        grid-area: 5 / 3 / 6 / 5;
      }

      #lsIPLR6Jwatj7uss {
        grid-template-columns: 0 3.125rem 0 47.65076196rem 0 3.125rem;
        grid-template-rows: 0 minmax(3.65113519rem, max-content) minmax(2.34375977rem, max-content) minmax(1.82828744rem, max-content) minmax(2.40234473rem, max-content) minmax(4.11949591rem, max-content);
        grid-area: 4 / 3 / 5 / 9;
      }

      #ptO4kiHjpRmIuPZP {
        grid-area: 4 / 3 / 5 / 9;
      }

      #lIhtNJUExvnzBWz7 {
        display: block;
      }

      #NzdDYuKIiItkGfAA {
        display: none;
      }

      #okwNDTPp1bn31rBe {
        display: none;
      }

      #agBeVOoGKQtG2jxY {
        grid-area: 2 / 2 / 7 / 7;
      }

      #GVSV7UrJR52kQrvD {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.34375977em - var(--ffsd)));
      }

      #wb74OMT2bdQ9Xw5L {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.34375977em) * 0.1);
      }

      #h0EGqo94WNpUKWiv {
        min-width: 47.69959009rem;
      }

      #RkpYWUshQjwy14pJ {
        grid-area: 3 / 4 / 4 / 6;
      }

      #bLznJ6KSmkPyyBqs {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.08333008em - var(--ffsd)));
      }

      #Oliy3RHyQSSuFvPz {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.08333008em) * -0.15);
      }

      #UbbnBmd3KyXKTAX9 {
        min-width: 47.69959009rem;
      }

      #JPcA8VFk8OF0ifMR {
        grid-area: 5 / 3 / 6 / 5;
      }

      #PmnrPqNjmF5d1Bfs {
        grid-template-columns: 0 3.125rem 0 47.65076196rem 0 3.125rem;
        grid-template-rows: 0 minmax(3.20165701rem, max-content) minmax(2.34375977rem, max-content) minmax(1.82828744rem, max-content) minmax(2.40234473rem, max-content) minmax(4.56897409rem, max-content);
        grid-area: 6 / 4 / 7 / 10;
      }

      #KvrElmXvAtWXYg4H {
        grid-area: 6 / 4 / 7 / 10;
      }

      #YVwuq5sxebgxJwQn {
        display: block;
      }

      #tRQLkAtD61GSvKbQ {
        display: none;
      }

      #f3wlcYGs6txlvsns {
        grid-area: 2 / 2 / 11 / 11;
      }

      #yruasGzZFRwySsjB {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(2.34375977em - var(--ffsd)));
      }

      #uq4nCiCkmn0NIOVd {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.34375977em) * 0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 2.34375977em) * 0.1);
      }

      #BcJk2oh9WURfrZF2 {
        min-width: 10.69447635rem;
      }

      #nIwAtMhxaMz0AEho {
        grid-area: 6 / 3 / 7 / 4;
      }

      #e6QtkDXDpJlnZh4J {
        grid-area: 4 / 5 / 9 / 6;
      }

      #hHb4Q6phZfQQboKc {
        grid-area: 5 / 7 / 10 / 8;
      }

      #Wkr0FTbwamDt0pHi {
        grid-area: 3 / 9 / 8 / 10;
      }

      #jXof2BTql7gUNcQk {
        grid-template-columns: 0 3.68023515rem 10.64564823rem 11.9618888rem 5.7086631rem 2.44140625rem 5.7086631rem 2.48759877rem 5.7086631rem 5.55799548rem;
        grid-template-rows: 0 minmax(4.31817997rem, max-content) 0 0 minmax(1.44808057rem, max-content) minmax(2.81250195rem, max-content) minmax(1.44808057rem, max-content) 0 0 minmax(4.31817997rem, max-content);
        grid-area: 8 / 5 / 9 / 11;
      }

      #fM4keex9JJO2fu6J {
        grid-area: 8 / 5 / 9 / 11;
      }

      #nxfR97sMUsXnrV4E {
        grid-area: 10 / 6 / 11 / 7;
      }

      #YRQNL0tddKkMGuSB {
        grid-template-columns: 23.04961902rem 0 0 0 8.65028655rem 36.60018887rem 8.65028655rem 0 0 0 23.04961902rem;
        grid-template-rows: minmax(3.125rem, max-content) minmax(14.34502303rem, max-content) 0 minmax(14.34502303rem, max-content) minmax(0.41162424rem, max-content) minmax(14.34502303rem, max-content) minmax(0.390625rem, max-content) minmax(14.34502303rem, max-content) minmax(3.125rem, max-content) minmax(36.66685588rem, max-content) minmax(3.125rem, max-content);
      }

      #contact {
        min-height: 15.71702232vh;
      }
    }

    @media (min-width: 1024.05px) {
      #V1PkVSJklNjNwezR {
        grid-area: 2 / 2 / 4 / 4;
      }

      #r7vMN3Xx0kj8k2IH {
        margin-left: -1.02698078%;
        clip-path: polygon(calc(1.00631152% + 0%) calc((0.00556612 * 100rem) + 0%), calc(100% - (1.00631152% + 0%)) calc((0.00556612 * 100rem) + 0%), calc(100% - (1.00631152% + 0%)) calc(100% - ((0.00556612 * 100rem) + 0%)), calc(1.00631152% + 0%) calc(100% - ((0.00556612 * 100rem) + 0%)));
        margin-top: -0.55661177%;
        margin-bottom: -0.55661177%;
        grid-area: 3 / 3 / 5 / 5;
        margin-right: -1.02698078%;
      }

      #XYGJy2jmn2zLu1UL {
        grid-template-columns: 0 0 100% 0;
        grid-template-rows: 0 0 100% 0;
      }

      #tfT6yyPb1ZV1d9se {
        grid-area: 2 / 2 / 5 / 3;
      }

      #T8oldhrmylbPLWbc {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.17130307em - var(--ffsd)));
      }

      #BavEe7O215xM5qzQ {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.17130307em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.17130307em) * -0.05);
      }

      #yIPeyou0JDxQXCdz {
        min-width: 13.73414869rem;
      }

      #QqxdLod3szIO71dV {
        grid-area: 3 / 4 / 4 / 5;
      }

      #unapl4vsnFc9yPsN {
        grid-template-columns: 0 2.06404364rem 1.31373668rem 13.69754547rem;
        grid-template-rows: 0 minmax(0.66601295rem, max-content) minmax(2.81112738rem, max-content) minmax(0.66601295rem, max-content);
        grid-area: 3 / 4 / 4 / 5;
      }

      #vwyAQYfZVZRL5z6z {
        grid-area: 3 / 4 / 4 / 5;
      }

      #Q4df3GZJrZ51IXjK {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(7.1945022em - var(--ffsd)));
      }

      #JWKnk5WEUL0CTval {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 7.1945022em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 7.1945022em) * 0.05);
      }

      #sGGSsRQl19Yu8XHn {
        min-width: 50.36688444rem;
      }

      #wOLfb0jH9BTxG4yx {
        grid-area: 5 / 2 / 6 / 7;
      }

      #MYBMSLPxXz5pfuz1 {
        grid-area: 2 / 2 / 5 / 5;
      }

      #FD05YrJEyDGvbuWI {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.75357247em - var(--ffsd)));
      }

      #kvNVd7MeEhqbwd9q {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.75357247em) * 0.1);
      }

      #nWXLDGwPaZTckdiu {
        min-width: 24.37807855rem;
      }

      #MjwwCMUDU9FSXyaP {
        grid-area: 3 / 3 / 4 / 4;
      }

      #kB1woNSaTg7J7n0Q {
        grid-template-columns: 0 0.29282577rem 24.34147533rem 0.29282577rem;
        grid-template-rows: 0 minmax(0.29282577rem, max-content) minmax(4.22239936rem, max-content) minmax(0.29282577rem, max-content);
      }

      #eg75sqrZoYR01tzO {
        grid-template-columns: 0 24.92712687rem;
        grid-template-rows: 0 minmax(4.80805089rem, max-content);
        grid-area: 7 / 3 / 8 / 6;
      }

      #iI6EKIHWr4zPPhxU {
        grid-area: 7 / 3 / 8 / 6;
      }

      #DCPfcD9PThZmbqWt {
        grid-area: 2 / 2 / 7 / 7;
      }

      #G0zLjOsXU7kDtfAT {
        grid-area: 2 / 2 / 7 / 7;
      }

      #hWUU6SVK721sC3IZ {
        grid-area: 3 / 3 / 5 / 4;
      }

      #OKGpBJexAmp9oE74 {
        font-size: max(0px, calc(1.26891654em - var(--ffsd)));
      }

      #kfmLqOmvtD9Dhgus {
        font-size: max(0px, calc(1.26891654em - var(--ffsd)));
      }

      #xvtGfSYKiAxKiWM5 {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(0px, 1.26891654em) * 0.05);
      }

      #bcGNc4zpjJ1e5Gcu {
        min-width: 9.03566221rem;
      }

      #WMHh43EoIXRfqJ5f {
        grid-area: 4 / 5 / 6 / 6;
      }

      #A0T5EBm235zwQ00p {
        grid-template-columns: 0 0.98838044rem 2.46091779rem 1.00907848rem 8.99905899rem 1.33497518rem;
        grid-template-rows: 0 minmax(0.84948426rem, max-content) minmax(0.07808675rem, max-content) minmax(2.78344557rem, max-content) minmax(0.12529089rem, max-content) minmax(0.92757101rem, max-content);
      }

      #Ybiycu5KGDu4sVSM {
        grid-area: 2 / 2 / 7 / 7;
      }

      #SKzyVpcY3vmuLH6M {
        grid-area: 4 / 3 / 5 / 4;
      }

      #V4RiPa246S53Tecs {
        font-size: max(0px, calc(1.26891654em - var(--ffsd)));
      }

      #ytyB6EoLIADnw05m {
        font-size: max(0px, calc(1.26891654em - var(--ffsd)));
      }

      #XFkGj050kKhxTQeY {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(0px, 1.26891654em) * 0.05);
      }

      #dLHkhTV2wQWxNTSo {
        min-width: 9.03566221rem;
      }

      #qNqUZ3sU2sipgESZ {
        grid-area: 3 / 5 / 6 / 6;
      }

      #gNpfPXxzNa5gPVsu {
        grid-template-columns: 0 1.33497518rem 2.3875062rem 0.73589534rem 8.99905899rem 1.33497518rem;
        grid-template-rows: 0 minmax(0.92757101rem, max-content) minmax(0.12529089rem, max-content) minmax(2.65815467rem, max-content) minmax(0.12529089rem, max-content) minmax(0.92757101rem, max-content);
      }

      #PUVfIJMM631qA3Y3 {
        grid-template-columns: 0 0.91597179rem 0 14.79241089rem 0 23.64740063rem;
        grid-template-rows: 0 minmax(26.61619302rem, max-content) minmax(4.76387847rem, max-content) minmax(1.19191835rem, max-content) minmax(4.76387847rem, max-content) minmax(2.019915rem, max-content);
      }

      #SAI6BBGmVYGDQt1c {
        grid-area: 2 / 3 / 5 / 4;
      }

      #nLAzXlr1bzrAm8YR {
        grid-template-columns: 0 8.31217723rem 22.73142884rem 8.31217723rem;
        grid-template-rows: 0 minmax(2.2690367rem, max-content) minmax(39.35578331rem, max-content) minmax(3.35321806rem, max-content);
        grid-area: 2 / 8 / 9 / 9;
      }

      #LarSXPHokbk2xrCp {
        grid-area: 2 / 8 / 9 / 9;
      }

      #ilgtogNyHpvKkL8t {
        grid-template-columns: 5.62225476rem 0 0.26097812rem 17.07532579rem 7.59082295rem 25.40315436rem 2.17140346rem 39.35578331rem 2.52027725rem;
        grid-template-rows: minmax(5.62225476rem, max-content) minmax(2.1064095rem, max-content) minmax(4.14315329rem, max-content) minmax(4.69708847rem, max-content) minmax(16.53204173rem, max-content) minmax(4.95830811rem, max-content) minmax(4.80805089rem, max-content) minmax(7.73298608rem, max-content) minmax(5.62225476rem, max-content);
      }

      #home {
        min-height: 16.66666667vh;
      }

      #YZZMOPq5rNpb7QCk {
        grid-area: 2 / 2 / 3 / 3;
      }

      #IO7F62or5XVGkuQW {
        grid-template-columns: 0 100%;
        grid-template-rows: 0 100%;
      }

      #EmNxSBqrUi8bFcwv {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.46608346em - var(--ffsd)));
      }

      #fXpPkNxuVTo02ZMi {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.46608346em) * 0.045);
      }

      #C3ZjmOA5zLmTvu1Y {
        min-width: 38.86550456rem;
      }

      #YWLUDDpnPevptUDU {
        grid-area: 3 / 2 / 4 / 5;
      }

      #DxNX2e9M3t7apqoR {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.56173499em - var(--ffsd)));
      }

      #lyCt6EK37OU9rAcz {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.15);
      }

      #rqEhnPH2xfPMqRX2 {
        min-width: 36.39269879rem;
      }

      #bHCDSflBLaOvSWBI {
        grid-area: 5 / 3 / 6 / 4;
      }

      #BfwUqEZh95gLLu8l {
        grid-area: 2 / 2 / 4 / 5;
      }

      #smrqivlevH9YdFxA {
        grid-area: 3 / 3 / 5 / 4;
      }

      #CQTUwGBM7FuGM1Um {
        grid-template-columns: 0 27.15234385rem 16.41048676rem 0.81491464rem;
        grid-template-rows: 0 minmax(23.67710334rem, max-content) minmax(16.44037836rem, max-content) 0;
        grid-area: 2 / 6 / 7 / 7;
      }

      #cdwSjqqOEBCoUrOf {
        grid-area: 2 / 6 / 7 / 7;
      }

      #NXqjaFCpzaOOtdPU {
        grid-template-columns: 5.62225476rem 0 36.35609557rem 2.47280577rem 3.37573821rem 44.37774524rem 7.79536045rem;
        grid-template-rows: minmax(8.05253294rem, max-content) minmax(4.71810833rem, max-content) minmax(12.49780403rem, max-content) minmax(2.76618356rem, max-content) minmax(15.41727745rem, max-content) minmax(4.71810833rem, max-content) minmax(8.05253294rem, max-content);
      }

      #about {
        min-height: 16.66666667vh;
      }

      #y0xdiF8Gd8AYedtf {
        grid-area: 2 / 2 / 3 / 3;
      }

      #E1SM9jAHpWgnkuEN {
        grid-template-columns: 0 100%;
        grid-template-rows: 0 100%;
      }

      #MGrHmHL1Ak6ngcrA {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.46608346em - var(--ffsd)));
      }

      #tOhYscnGCWArdh1C {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.46608346em) * 0.045);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.46608346em) * 0.045);
      }

      #zIsf8m6Lnzsm2uob {
        min-width: 38.59373195rem;
      }

      #Vjxi9enmN4GKXvjU {
        grid-area: 2 / 3 / 3 / 6;
      }

      #OZu3bZzneaGtLHwR {
        display: block;
      }

      #Gen2kkyU64l8vpFu {
        display: none;
      }

      #Mwc8GSrJOgnXfRM6 {
        grid-area: 2 / 2 / 7 / 7;
      }

      #tvczyqODUZGkxznJ {
        grid-area: 2 / 2 / 5 / 5;
      }

      #RcH6wUArHfuJ8sXl {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.56173499em - var(--ffsd)));
      }

      #MT3EMpvTUaYvOeN0 {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.05);
      }

      #BrQmGSUIyw3kRSIl {
        min-width: 1.76553349rem;
      }

      #F6jnuoMur73zkQOk {
        grid-area: 3 / 3 / 4 / 4;
      }

      #KCRRsM9AKpvwQmhT {
        grid-template-columns: 0 1.30292243rem 1.72893027rem 1.30292243rem;
        grid-template-rows: 0 minmax(1.25718735rem, max-content) minmax(1.82040044rem, max-content) minmax(1.25718735rem, max-content);
      }

      #VSPZrwey5ta2PsRK {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.56172767em - var(--ffsd)));
      }

      #FwnhbEOBFWPfZADY {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56172767em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56172767em) * -0.05);
      }

      #FSpu6gxGdAWnZAZT {
        min-width: 23.69566728rem;
      }

      #qk0ICm39BL3jlBT3 {
        grid-area: 5 / 3 / 6 / 6;
      }

      #COxdKC2a8KiczNgu {
        grid-template-columns: 0 4.83713464rem 0 4.33477513rem 19.32428892rem 4.83713464rem;
        grid-template-rows: 0 minmax(3.38198973rem, max-content) minmax(4.33477513rem, max-content) minmax(3.05622511rem, max-content) minmax(5.77354905rem, max-content) minmax(5.62225476rem, max-content);
      }

      #ROE8mWEsRK3HhzmT {
        grid-template-columns: 0 33.33333333rem;
        grid-template-rows: 0 minmax(22.16879377rem, max-content);
        grid-area: 4 / 2 / 7 / 4;
      }

      #BRpQnQIlxbOgdkxB {
        grid-area: 4 / 2 / 7 / 4;
      }

      #xY4x0yK7QGzXENti {
        display: block;
      }

      #XOvAWaF962YJaLYi {
        display: none;
      }

      #IRflFs60Z6IkegYO {
        grid-area: 2 / 2 / 7 / 7;
      }

      #QKr52SEnpCeSumKk {
        grid-area: 2 / 2 / 5 / 5;
      }

      #GIgokzRGzuQ5vwPb {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.56173499em - var(--ffsd)));
      }

      #LR8FtwqsgUwTynw7 {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.05);
      }

      #WmyHRLRMhLm5xAfE {
        min-width: 2.49251295rem;
      }

      #N7pAvJj1PFRyXOvl {
        grid-area: 3 / 3 / 4 / 4;
      }

      #JHXUPsoXENtzUvZZ {
        grid-template-columns: 0 0.9394327rem 2.45590973rem 0.9394327rem;
        grid-template-rows: 0 minmax(1.25718735rem, max-content) minmax(1.82040044rem, max-content) minmax(1.25718735rem, max-content);
      }

      #KhSgB0wHQxHLNVJH {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.56172767em - var(--ffsd)));
      }

      #aSEd131TVZSH343o {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56172767em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56172767em) * -0.05);
      }

      #EqYCjgD3Dznoc9Fi {
        min-width: 23.15239085rem;
      }

      #cfG6CdAXhSAVwrOE {
        grid-area: 5 / 3 / 6 / 6;
      }

      #uNWkFl1h7Kx88bUO {
        grid-template-columns: 0 5.10877285rem 0 4.33477513rem 18.7810125rem 5.10877285rem;
        grid-template-rows: 0 minmax(3.38198973rem, max-content) minmax(4.33477513rem, max-content) minmax(3.05622511rem, max-content) minmax(5.77354905rem, max-content) minmax(5.62225476rem, max-content);
      }

      #bcfWdUD1lDoDHeTG {
        grid-template-columns: 0 33.33333333rem;
        grid-template-rows: 0 minmax(22.16879377rem, max-content);
        grid-area: 5 / 5 / 8 / 7;
      }

      #QHtE4ZDOQr1grhXf {
        grid-area: 5 / 5 / 8 / 7;
      }

      #RogP5gSzgTNO2Mvk {
        display: block;
      }

      #FqaL5HhvuaqKYEpU {
        display: none;
      }

      #hLvDrJoBo1vXNtbI {
        grid-area: 2 / 2 / 7 / 7;
      }

      #DsOY97bDsNYtojnA {
        grid-area: 2 / 2 / 5 / 5;
      }

      #Lzd6TiKVutnhnweZ {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.56173499em - var(--ffsd)));
      }

      #QHaAhPno4VSbeyhq {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.05);
      }

      #sADlAHndSmaPdnPL {
        min-width: 2.49251295rem;
      }

      #FO7HqEAUZD26skhq {
        grid-area: 3 / 3 / 4 / 4;
      }

      #Qlad3DMmujstOt3B {
        grid-template-columns: 0 0.9394327rem 2.45590973rem 0.9394327rem;
        grid-template-rows: 0 minmax(1.25718735rem, max-content) minmax(1.82040044rem, max-content) minmax(1.25718735rem, max-content);
      }

      #tEYMpNJpB7liYEWd {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.56172767em - var(--ffsd)));
      }

      #F7SLL6FeLL2XltMA {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56172767em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56172767em) * -0.05);
      }

      #adcVNXMIKHgyhdy1 {
        min-width: 22.33747622rem;
      }

      #kLAiTL7PBno2WmOc {
        grid-area: 5 / 3 / 6 / 6;
      }

      #o37c4mED4DturuXU {
        grid-template-columns: 0 5.51623017rem 0 4.33477513rem 17.96609786rem 5.51623017rem;
        grid-template-rows: 0 minmax(3.38198973rem, max-content) minmax(4.33477513rem, max-content) minmax(3.05622511rem, max-content) minmax(5.77354905rem, max-content) minmax(5.62225476rem, max-content);
      }

      #ZCzeiv9LaKupDtu5 {
        grid-template-columns: 0 33.33333333rem;
        grid-template-rows: 0 minmax(22.16879377rem, max-content);
        grid-area: 6 / 8 / 9 / 9;
      }

      #qAOgFiF1XPlKSl5h {
        grid-area: 6 / 8 / 9 / 9;
      }

      #PHy7cS4BQMpHR0eb {
        grid-template-columns: 0 5.62225476rem 27.71107857rem 0 10.84605015rem 22.48728318rem 0 33.33333333rem;
        grid-template-rows: minmax(11.055019rem, max-content) minmax(12.49780403rem, max-content) minmax(10.50093079rem, max-content) 0 0 minmax(22.16879377rem, max-content) 0 0;
      }

      #features {
        min-height: 16.66666667vh;
      }

      #IatESsvDunEGGpJK {
        grid-area: 2 / 2 / 4 / 4;
      }

      #oJy7123E1qgMVkAm {
        margin-left: 0%;
        clip-path: polygon(calc(0% + 0%) calc((0 * 100rem) + 0%), calc(100% - (0.07244318% + 0%)) calc((0 * 100rem) + 0%), calc(100% - (0.07244318% + 0%)) calc(100% - ((0 * 100rem) + 0%)), calc(0% + 0%) calc(100% - ((0 * 100rem) + 0%)));
        margin-top: 0%;
        margin-bottom: 0%;
        grid-area: 3 / 3 / 5 / 5;
        margin-right: -0.0724957%;
      }

      #Wge4EodMgbi2xniR {
        grid-template-columns: 0 0 100% 0;
        grid-template-rows: 0 0 100% 0;
      }

      #kSKF7BAXqkvkOlGF {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.46608346em - var(--ffsd)));
      }

      #gXRhGkyi6pahAoPc {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.46608346em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.46608346em) * -0.05);
      }

      #GGGrZbWYokQF8N3k {
        min-width: 57.90662209rem;
      }

      #Qp939bx8mnM2p2Cc {
        grid-area: 2 / 3 / 3 / 8;
      }

      #CSl1nt0lSwFV3EgA {
        grid-area: 2 / 2 / 3 / 5;
      }

      #IdWDhbczDqsCDMQX {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.56173499em - var(--ffsd)));
      }

      #TwnkaULX0LlgWVXI {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.1);
      }

      #cMUjuv9swqKtqyHU {
        min-width: 21.29621135rem;
      }

      #nSxnyNdmQqBtBEYo {
        grid-area: 4 / 4 / 5 / 7;
      }

      #TY1SNEoXzhbNc9cA {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.56173499em - var(--ffsd)));
      }

      #FyIS54VabpVsOS6z {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.05);
      }

      #ULRdepXwpXiCxFVE {
        min-width: 16.94167485rem;
      }

      #U0GQGzJG8kFcjS9B {
        grid-area: 6 / 3 / 7 / 6;
      }

      #y1hCAJ8u5N5gDLjD {
        grid-template-columns: 0 0 0 2.20726687rem 14.69780476rem 4.3545365rem;
        grid-template-rows: 0 minmax(1.74374083rem, max-content) minmax(4.02635432rem, max-content) minmax(10.30258712rem, max-content) minmax(4.05807596rem, max-content) minmax(1.82040044rem, max-content);
        grid-area: 6 / 2 / 9 / 4;
      }

      #fd54UyAF4YB9XBlb {
        grid-area: 6 / 2 / 9 / 4;
      }

      #ihZ9bxvI3CF6FopU {
        grid-area: 2 / 2 / 3 / 5;
      }

      #FtcQuUHAQ47D9rL1 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.56173499em - var(--ffsd)));
      }

      #TGeAucpZ8hbzS8Eq {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.1);
      }

      #IZ6dzRwhXBzyCZQV {
        min-width: 21.29621135rem;
      }

      #IRO1CeJz4nzQ7Gh6 {
        grid-area: 4 / 4 / 5 / 7;
      }

      #rsBCMfnq8TopGP3W {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.56173499em - var(--ffsd)));
      }

      #Lk6zOOoeH3Asky9b {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.05);
      }

      #Bi2ZWiMpPtgSdBTn {
        min-width: 16.94167485rem;
      }

      #VRRl1HAKFIagkGMZ {
        grid-area: 6 / 3 / 7 / 6;
      }

      #YBpgzhvDyPGbx5xn {
        grid-template-columns: 0 0 0 2.20726687rem 14.69780476rem 4.3545365rem;
        grid-template-rows: 0 minmax(1.74374083rem, max-content) minmax(4.02635432rem, max-content) minmax(10.30258712rem, max-content) minmax(4.05807596rem, max-content) minmax(1.82040044rem, max-content);
        grid-area: 4 / 5 / 7 / 6;
      }

      #ZIXDPoQ2WtjvIngt {
        grid-area: 4 / 5 / 7 / 6;
      }

      #ChWmt3aNBB5GO5pO {
        grid-area: 2 / 2 / 3 / 5;
      }

      #DbsIjPDTRJ3OijpA {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.56173499em - var(--ffsd)));
      }

      #zp3K0Essj8XG0E6g {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.1);
      }

      #s1yXNf4veM4LmPh9 {
        min-width: 21.29621135rem;
      }

      #wLRFObROr4zUNB9N {
        grid-area: 4 / 4 / 5 / 7;
      }

      #dtnW85p2bntj1qGw {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.56173499em - var(--ffsd)));
      }

      #Th82MjKcstJf96L6 {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.05);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.05);
      }

      #NF9X5CkjfGFOlshY {
        min-width: 16.94167485rem;
      }

      #CurpJPQbGg4l85mv {
        grid-area: 6 / 3 / 7 / 6;
      }

      #L5M1zvrXhqJLlVkx {
        grid-template-columns: 0 0 0 2.20726687rem 14.69780476rem 4.3545365rem;
        grid-template-rows: 0 minmax(1.74374083rem, max-content) minmax(4.02635432rem, max-content) minmax(10.30258712rem, max-content) minmax(4.05807596rem, max-content) minmax(1.82040044rem, max-content);
        grid-area: 5 / 7 / 8 / 9;
      }

      #yivxW5N1n0QRSwmW {
        grid-area: 5 / 7 / 8 / 9;
      }

      #h6Qrzjb0fdU5uBxd {
        grid-template-columns: 10.42070087rem 10.62980406rem 10.62980406rem 7.68988695rem 21.25960812rem 7.68988695rem 10.60083279rem 10.65877534rem 10.42070087rem;
        grid-template-rows: minmax(7.12463424rem, max-content) minmax(6.55441654rem, max-content) minmax(8.45555987rem, max-content) 0 minmax(0.05419063rem, max-content) minmax(21.89696803rem, max-content) 0 minmax(0.05419063rem, max-content) minmax(12.08258765rem, max-content);
      }

      #reviews {
        min-height: 16.66666667vh;
      }

      #vgeDbPpajJDWoPLN {
        grid-area: 2 / 2 / 3 / 3;
      }

      #gpaDAwZ8LBiqcTJT {
        grid-template-columns: 0 100%;
        grid-template-rows: 0 100%;
      }

      #Bfw4EiVkU5zDhsRi {
        grid-area: 2 / 2 / 4 / 5;
      }

      #nmSNBU7ZUIIwQbrl {
        grid-area: 3 / 3 / 5 / 4;
      }

      #Fzm1k8dxHuECEAkH {
        grid-template-columns: 0 27.15234385rem 16.41048676rem 0.81491464rem;
        grid-template-rows: 0 minmax(23.67710334rem, max-content) minmax(16.44037836rem, max-content) 0;
      }

      #OSVNEWiyGg3XQty7 {
        grid-template-columns: 0 44.37774524rem;
        grid-template-rows: 0 minmax(40.1174817rem, max-content);
        grid-area: 2 / 2 / 7 / 3;
      }

      #YVHvr7RAsRc3kNsU {
        grid-area: 2 / 2 / 7 / 3;
      }

      #NBwtsHzsv6WkHCkn {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.46608346em - var(--ffsd)));
      }

      #ns7tDsp3tuVuTws2 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.46608346em - var(--ffsd)));
      }

      #Xvh7WwEGuZyf5Jtu {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.46608346em) * -0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.46608346em) * 0.1);
      }

      #SmENYS7IUryuNwaa {
        min-width: 34.89868862rem;
      }

      #HkXDkeXDgCykc6j5 {
        grid-area: 3 / 4 / 4 / 7;
      }

      #FqzNnbvG4GJrUZO5 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.56173499em - var(--ffsd)));
      }

      #qGqBw3uwcaHKttxw {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.15);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.15);
      }

      #kWBlFAEmyjuE6LTx {
        min-width: 31.42277807rem;
      }

      #bcOBdfYxxNv2D3Xi {
        grid-area: 5 / 5 / 6 / 6;
      }

      #ApWkf18irvr3hSQ6 {
        grid-template-columns: 5.62225476rem 44.37774524rem 6.65513619rem 0 31.38617485rem 3.47591055rem 8.48277841rem;
        grid-template-rows: minmax(8.58707399rem, max-content) minmax(2.43768146rem, max-content) minmax(11.92777013rem, max-content) minmax(4.55858941rem, max-content) minmax(17.68667716rem, max-content) minmax(3.50676354rem, max-content) minmax(7.5179919rem, max-content);
      }

      #company {
        min-height: 16.66666667vh;
      }

      #vE2ScT5xaOi4SF5Q {
        grid-area: 2 / 2 / 3 / 3;
      }

      #BL7av49lvFD4fcoB {
        grid-template-columns: 0 100%;
        grid-template-rows: 0 100%;
      }

      #a97fRpMiPe1Gd8DT {
        display: block;
      }

      #DHsv4D8dGBkxJKte {
        display: none;
      }

      #kNgVYRt4vPeMTmyv {
        display: none;
      }

      #r9FJIgJYy9PBxwVk {
        grid-area: 2 / 2 / 5 / 5;
      }

      #LFHHQbqXP9kNQfU7 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(5.46608346em - var(--ffsd)));
      }

      #PAZiAcdjP24jowsV {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.46608346em) * 0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 5.46608346em) * 0.1);
      }

      #x8EyTnvTGLNhIVXw {
        min-width: 34.73617863rem;
      }

      #B8wmoKRFpHKpZizV {
        grid-area: 3 / 3 / 4 / 4;
      }

      #Tb08xKPLmzqDu5nQ {
        grid-template-columns: 0 2.75882928rem 34.69957541rem 2.94743737rem;
        grid-template-rows: 0 minmax(1.9847962rem, max-content) minmax(6.51049341rem, max-content) minmax(2.25822693rem, max-content);
      }

      #zC9IlUBJibglXmkI {
        grid-template-columns: 0 40.40584206rem;
        grid-template-rows: 0 minmax(10.75351654rem, max-content);
        grid-area: 2 / 2 / 4 / 6;
      }

      #rTIVi9GOIrNJyZ6v {
        grid-area: 2 / 2 / 4 / 6;
      }

      #KRkPopCraFQRyOf1 {
        display: block;
      }

      #l1WXjOdvui3ngpfP {
        display: none;
      }

      #fTmpltE79MpZ2KBV {
        display: none;
      }

      #kdABfMvPxfrLEOHU {
        grid-area: 2 / 2 / 7 / 7;
      }

      #t3lsHEDejp33ni0j {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.75696193em - var(--ffsd)));
      }

      #YbTnU5Sp7bxnVDmm {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.75696193em) * 0.1);
      }

      #P46znYsbwZsmM4NH {
        min-width: 26.3806496rem;
      }

      #UqMe3ybdMi08zzBy {
        grid-area: 3 / 4 / 4 / 6;
      }

      #EkX9AZed4PmkBVt9 {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.56173499em - var(--ffsd)));
      }

      #sulHgf0yB1l7bZ7Z {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.15);
      }

      #TAVEK9EhOL3Rwq2w {
        min-width: 26.3806496rem;
      }

      #il7wrKoIQwxPF3Jb {
        grid-area: 5 / 3 / 6 / 5;
      }

      #lsIPLR6Jwatj7uss {
        grid-template-columns: 0 2.75882928rem 0 26.34404638rem 0 11.3029664rem;
        grid-template-rows: 0 minmax(2.73701496rem, max-content) minmax(2.108347rem, max-content) minmax(1.37054637rem, max-content) minmax(1.80087921rem, max-content) minmax(2.736729rem, max-content);
        grid-area: 5 / 3 / 6 / 7;
      }

      #ptO4kiHjpRmIuPZP {
        grid-area: 5 / 3 / 6 / 7;
      }

      #lIhtNJUExvnzBWz7 {
        display: block;
      }

      #NzdDYuKIiItkGfAA {
        display: none;
      }

      #okwNDTPp1bn31rBe {
        display: none;
      }

      #agBeVOoGKQtG2jxY {
        grid-area: 2 / 2 / 7 / 7;
      }

      #GVSV7UrJR52kQrvD {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.75696193em - var(--ffsd)));
      }

      #wb74OMT2bdQ9Xw5L {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.75696193em) * 0.1);
      }

      #h0EGqo94WNpUKWiv {
        min-width: 26.3806496rem;
      }

      #RkpYWUshQjwy14pJ {
        grid-area: 3 / 4 / 4 / 6;
      }

      #bLznJ6KSmkPyyBqs {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.56173499em - var(--ffsd)));
      }

      #Oliy3RHyQSSuFvPz {
        transform: translateX(0);
        margin-top: 0;
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.56173499em) * -0.15);
      }

      #UbbnBmd3KyXKTAX9 {
        min-width: 26.3806496rem;
      }

      #JPcA8VFk8OF0ifMR {
        grid-area: 5 / 3 / 6 / 5;
      }

      #PmnrPqNjmF5d1Bfs {
        grid-template-columns: 0 2.75882928rem 0 26.34404638rem 0 11.3029664rem;
        grid-template-rows: 0 minmax(2.40007085rem, max-content) minmax(2.108347rem, max-content) minmax(1.37054637rem, max-content) minmax(1.80087921rem, max-content) minmax(3.07367311rem, max-content);
        grid-area: 7 / 4 / 8 / 8;
      }

      #KvrElmXvAtWXYg4H {
        grid-area: 7 / 4 / 8 / 8;
      }

      #YVwuq5sxebgxJwQn {
        display: block;
      }

      #tRQLkAtD61GSvKbQ {
        display: none;
      }

      #f3wlcYGs6txlvsns {
        grid-area: 2 / 2 / 11 / 11;
      }

      #yruasGzZFRwySsjB {
        font-size: max(calc(12px * var(--rfso, var(--bfso, 1))), calc(1.75696193em - var(--ffsd)));
      }

      #uq4nCiCkmn0NIOVd {
        transform: translateX(0);
        margin-top: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.75696193em) * 0.1);
        margin-bottom: calc(max(calc(12px * var(--rfso, var(--bfso, 1))), 1.75696193em) * 0.1);
      }

      #BcJk2oh9WURfrZF2 {
        min-width: 8.01694274rem;
      }

      #nIwAtMhxaMz0AEho {
        grid-area: 6 / 3 / 7 / 4;
      }

      #e6QtkDXDpJlnZh4J {
        grid-area: 4 / 5 / 9 / 6;
      }

      #hHb4Q6phZfQQboKc {
        grid-area: 5 / 7 / 10 / 8;
      }

      #Wkr0FTbwamDt0pHi {
        grid-area: 3 / 9 / 8 / 10;
      }

      #jXof2BTql7gUNcQk {
        grid-template-columns: 0 2.75882928rem 7.98033952rem 8.96703816rem 4.27940777rem 1.83016105rem 4.27940777rem 1.86478854rem 4.27940777rem 4.1664622rem;
        grid-template-rows: 0 minmax(3.23705438rem, max-content) 0 0 minmax(1.08553038rem, max-content) minmax(2.108347rem, max-content) minmax(1.08553038rem, max-content) 0 0 minmax(3.23705438rem, max-content);
        grid-area: 9 / 5 / 11 / 9;
      }

      #fM4keex9JJO2fu6J {
        grid-area: 9 / 5 / 11 / 9;
      }

      #nxfR97sMUsXnrV4E {
        grid-area: 3 / 10 / 10 / 11;
      }

      #YRQNL0tddKkMGuSB {
        grid-template-columns: 5.62225476rem 0 0 0 40.40584206rem 0 0 0 12.90422644rem 27.43674481rem 13.63093193rem;
        grid-template-rows: minmax(5.94248002rem, max-content) minmax(8.42543344rem, max-content) minmax(2.32808309rem, max-content) 0 minmax(10.75351654rem, max-content) minmax(0.30856751rem, max-content) minmax(10.75351654rem, max-content) minmax(0.29282577rem, max-content) minmax(3.05021122rem, max-content) minmax(7.70330532rem, max-content) minmax(6.66460814rem, max-content);
      }

      #contact {
        min-height: 16.66666667vh;
      }
    }

    @keyframes pulse {
      0% {
        background-color: rgba(226, 226, 226, 0.05);
      }

      50% {
        background-color: rgba(226, 226, 226, 0.1);
      }

      100% {
        background-color: rgba(226, 226, 226, 0.05);
      }
    }
  </style><noscript>
    <style>
      .animated {
        animation-play-state: running !important;
      }

      @keyframes pulse {}
    </style>
  </noscript>
  <script
    nonce='d9f0c7bb-6cd1-4c47-ac99-f1b07e9b35dc'>!function () { "use strict"; function n(n, t) { let e = (null == t ? void 0 : t.runOnLoad) ? void 0 : document.documentElement.clientWidth, o = (null == t ? void 0 : t.runOnLoad) ? void 0 : window.innerHeight; const r = () => { const r = { runOnLoad: !1, runOnWidthChange: !0, runOnHeightChange: !1, ...t }, i = document.documentElement.clientWidth, d = window.innerHeight, c = o !== d; (e !== i && r.runOnWidthChange || c && r.runOnHeightChange) && n(), e = i, o = d }, i = function (n, t) { let e; return (...o) => { clearTimeout(e), e = setTimeout((() => { n(...o) }), t) } }(r, 100); window.addEventListener("resize", i), (null == t ? void 0 : t.runOnLoad) && ("loading" === document.readyState ? window.addEventListener("DOMContentLoaded", r) : r()) } function t(n, t, e = .001) { return Math.abs(n - t) < e } function e(n, t) { return window.getComputedStyle(n).getPropertyValue(t) } function o(n, t, e) { n.style.setProperty(t, e) } function r(n, t) { const o = document.createElement("div"); o.style.setProperty(n, t), document.body.append(o); const r = e(o, n); return o.remove(), r } function i() { const i = function () { const n = parseFloat(r("font-size", "0.1px")); return n > 1 ? n : 0 }(), d = function (n) { const t = 2 * Math.max(n, 1); return t / parseFloat(r("font-size", `${t}px`)) }(i); if (function (t) { if (0 === t) return; o(document.documentElement, "--minfs", `${t}px`), n((() => { const n = 100 * t, { clientWidth: e } = document.documentElement; o(document.documentElement, "--rzf", n > e ? (e / n).toPrecision(4) : null) }), { runOnLoad: !0 }) }(i * Math.max(1, d)), t(d, 1)) return; const c = t(parseFloat(e(document.documentElement, "font-size")), parseFloat(r("grid-template-columns", "1rem"))); o(document.documentElement, c ? "--rfso" : "--bfso", d.toPrecision(4)) } function d() { document.querySelectorAll("img, image, video, svg").forEach((n => n.addEventListener("contextmenu", (n => n.preventDefault())))) } function c() { const n = window.innerWidth - document.documentElement.clientWidth; var t, e, o; t = document.documentElement, e = "--sbw", o = n >= 0 ? `${n}px` : null, t.style.setProperty(e, o) } var u; const a = "undefined" != typeof window ? null === (u = window.navigator) || void 0 === u ? void 0 : u.userAgent : void 0; const m = !(!a || (l = a, !l.match(/AppleWebKit\//) || l.match(/Chrome\//) || l.match(/Chromium\//))); var l; function s(n) { const t = Array.from(n.children); t.forEach(((n, e) => { if (n.hasAttribute("data-foreign-object-container")) n.style.transformOrigin = "", n.style.transform = ""; else { const o = document.createElement("div"); o.setAttribute("data-foreign-object-container", ""), o.style.willChange = "transform", n.insertAdjacentElement("beforebegin", o), n.remove(), o.append(n), t[e] = o } })); const e = n.getScreenCTM(); if (!e) return; const { a: o, b: r, c: i, d: d } = e; t.forEach((n => { if (!n.hasAttribute("data-foreign-object-container")) return; const { style: t } = n; t.transformOrigin = "0px 0px", t.transform = `matrix(${o}, ${r}, ${i}, ${d}, 0, 0)` })) } let f; function h() { f || (f = Array.from(document.querySelectorAll("foreignObject")).filter((n => 0 === n.getBoundingClientRect().width))), Array.from(f).forEach(s) } [function () { "loading" === document.readyState ? window.addEventListener("DOMContentLoaded", i) : i() }, function () { n(c, { runOnLoad: !0 }) }, function () { m && n(h, { runOnLoad: !0 }) }, function () { "loading" === document.readyState ? window.addEventListener("DOMContentLoaded", d) : d() }].forEach((n => n())) }();</script>
  <script nonce="d9f0c7bb-6cd1-4c47-ac99-f1b07e9b35dc">
    window.C_CAPTCHA_IMPLEMENTATION = 'RECAPTCHA';
  </script>
  <script nonce="d9f0c7bb-6cd1-4c47-ac99-f1b07e9b35dc">
    window.C_CAPTCHA_KEY = '6Ldk59waAAAAAMPqkICbJjfMivZLCGtTpa6Wn6zO';
  </script>
</head>

<body>
  <div id="root">
    <section id="home"
      style="z-index:0;overflow:hidden;grid-template-columns:auto 100rem auto;display:grid;position:relative;align-items:center;">
      <div id="XYGJy2jmn2zLu1UL"
        style="display:grid;min-height:100%;position:absolute;grid-area:1 / 1 / 2 / 4;min-width:100%;">
        <div id="V1PkVSJklNjNwezR" style="z-index:0;position:relative;">
          <div id="PcSD5qART88na8pY" style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
            <div id="pAfPe6HiJBDT9NCQ" style="width:100%;opacity:1.0;height:100%;">
              <div id="kONYLnZiVxeuLXBF"
                style="background-color:#0a1a44;transform:scale(1, 1);overflow:hidden;width:100%;position:relative;opacity:1.0;height:100%;">
              </div>
            </div>
          </div>
        </div>
        <div id="r7vMN3Xx0kj8k2IH" style="z-index:1;position:relative;">
          <div id="I1AHh668QmSNGXZN" style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
            <div id="VKL961aUIzDmCfpT" style="width:100%;opacity:1.0;height:100%;">
              <div id="pam0L9V4sU3ee3OA"
                style="transform:scale(1, 1);overflow:hidden;width:100%;position:relative;height:100%;">
                <div id="SjqP1dAyUh1xm8wQ"
                  style="transform:rotate(0deg);top:0%;left:0%;width:100%;position:absolute;height:100%;opacity:1.0;animation:pulse 1.5s ease-in-out infinite;">
                  <img src="images/b41306e144c547ea0fdcb44230c9db5e.svg" alt="Wide recolorable gradient" loading="lazy"
                    style="display:block;object-fit:cover;width:100%;height:100%;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="ilgtogNyHpvKkL8t" style="display:grid;position:relative;grid-area:1 / 2 / 2 / 3;">
        <div id="vwyAQYfZVZRL5z6z" style="position:relative;">
          <div id="unapl4vsnFc9yPsN" style="display:grid;position:relative;">
            <div id="tfT6yyPb1ZV1d9se" style="z-index:12;position:relative;">
              <div id="GO1w7Vqh64GwUJpB" style="padding-top:200.72992701%;transform:rotate(0deg);">
                <div id="UYbKH5C33aW5ZKHv" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
                  <div id="PlsQJu542NG1c9mc" style="width:100%;opacity:1.0;height:100%;">
                    <div id="EMz1ba6ny867l2Ph"
                      style="transform:scale(1, 1);overflow:hidden;width:100%;position:relative;height:100%;">
                      <div id="QqsatucBScmFGF9Q"
                        style="transform:rotate(0deg);top:0%;left:0%;width:100%;position:absolute;height:100%;opacity:1.0;animation:pulse 1.5s ease-in-out infinite;">
                        <img src="images/a3a4da68fcf99a53711aa3c6c5e818bf.svg"
                          alt="Abstract Shape Art Deco Logo Icon Desing" loading="lazy"
                          style="display:block;object-fit:cover;width:100%;height:100%;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="QqxdLod3szIO71dV" style="z-index:13;position:relative;">
              <div id="yIPeyou0JDxQXCdz" style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                <div id="BavEe7O215xM5qzQ"
                  style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                  <p id="T8oldhrmylbPLWbc"
                    style="text-transform:uppercase;color:#ffffff;letter-spacing:0.127em;font-family:YAD_cUi3FOQ-0;line-height:1.3em;">
                    <span id="Pm7DIgdmt0knI0ng" style="color:#ffffff;font-weight:700;">Lamplight Mobile
                      Systems</span><br></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="wOLfb0jH9BTxG4yx" style="z-index:14;position:relative;">
          <div id="sGGSsRQl19Yu8XHn" style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
            <div id="JWKnk5WEUL0CTval"
              style="flex-direction:column;display:flex;width:100%;justify-content:flex-end;opacity:1.0;height:100%;">
              <p id="Q4df3GZJrZ51IXjK"
                style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAD_cQGyXdk-0;line-height:1.1em;">
                <span id="UO6EHVnWWW1Bwgxm" style="color:#ffffff;">Buy without lifting a finger.</span><br></p>
            </div>
          </div>
        </div>
        <div id="iI6EKIHWr4zPPhxU" style="position:relative;">
          <div id="eg75sqrZoYR01tzO" style="display:grid;position:relative;">
            <div id="kB1woNSaTg7J7n0Q" style="display:grid;position:relative;grid-area:2 / 2 / 3 / 3;">
              <div id="MYBMSLPxXz5pfuz1" style="z-index:16;position:relative;">
                <div id="FVgRfYilBC9NP41A" style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                  <svg id="oAUykpx0mWGotzez" viewBox="0 0 67.2602 12.9734" preserveAspectRatio="none"
                    style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                    <g id="bEKrplg1vyn7JMPq" style="transform:scale(1, 1);">
                      <path id="LzbfwMAWM2l2XHkG"
                        d="M6.48671341,0.0 L60.77344894,0.0 C64.35596184,0.0 67.26016235,2.90420052 67.26016235,6.48671341 L67.26016235,6.48671341 C67.26016235,8.20709677 66.57674272,9.857017710000001 65.36024798,11.07351245 64.14375324,12.29000719 62.4938323,12.97342682 60.77344894,12.97342682 L6.48671341,12.97342682 C2.90420052,12.97342682 0.0,10.0692263 0.0,6.48671341 L0.0,6.48671341 C0.0,2.90420052 2.90420052,0.0 6.48671341,0.0 Z"
                        style="fill:#00c4cc;opacity:1.0;"></path>
                    </g>
                  </svg></div>
              </div>
              <div id="MjwwCMUDU9FSXyaP" style="z-index:17;position:relative;">
                <div id="nWXLDGwPaZTckdiu" style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                  <div id="kvNVd7MeEhqbwd9q"
                    style="flex-direction:column;display:flex;width:100%;justify-content:center;opacity:1.0;height:100%;">
                    <p id="FD05YrJEyDGvbuWI"
                      style="margin-left:0em;text-transform:none;color:#000000;letter-spacing:0em;font-family:YAD_cQGyXdk-0;line-height:1em;direction:ltr;text-align:center;">
                      <span id="FXtmYAkmS3xOAvTx"
                        style="text-decoration-line:none;color:#000000;font-weight:400;font-style:normal;">Download the
                        App</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="LarSXPHokbk2xrCp" style="position:relative;">
          <div id="nLAzXlr1bzrAm8YR" style="display:grid;position:relative;">
            <div id="PUVfIJMM631qA3Y3" style="display:grid;position:relative;grid-area:3 / 2 / 4 / 5;">
              <div id="DCPfcD9PThZmbqWt" style="z-index:3;position:relative;">
                <div id="WpioIHcKGrk9Nwng" style="padding-top:100%;transform:rotate(0deg);">
                  <div id="b4nRANWX2YzRZYFo" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
                    <div id="gunyj1kh1MyS9Aie" style="width:100%;opacity:1.0;height:100%;">
                      <div id="yonRzp44LN5kfrdw"
                        style="transform:scale(1, 1);overflow:hidden;width:100%;position:relative;height:100%;">
                        <div id="smJRjU36LZEVWCgl"
                          style="transform:rotate(0deg);top:0%;left:0%;width:100%;position:absolute;height:100%;opacity:1.0;animation:pulse 1.5s ease-in-out infinite;">
                          <img src="images/448cc1eaedb7f0c591ce402de7fb5a8c.svg" alt="Orange Blur Circle Illustration"
                            loading="lazy" style="display:block;object-fit:cover;width:100%;height:100%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="A0T5EBm235zwQ00p" style="display:grid;position:relative;grid-area:3 / 4 / 4 / 6;">
                <div id="G0zLjOsXU7kDtfAT" style="z-index:8;position:relative;">
                  <div id="iXAeID3btNC3cLF1" style="padding-top:32.20488199%;transform:rotate(0deg);">
                    <div id="XxMUP8IzXXPapq64" style="top:0px;left:0px;width:100%;position:absolute;height:100%;"><svg
                        id="Hgl6H5KLMJH7ynbH" viewBox="0 0 161.4662 52.0"
                        style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                        <g id="j7A5EwbVOmlGIozn" style="transform:scale(1, 1);">
                          <path id="MQji6gk4msVmcXHM"
                            d="M151.6661964814856,51.999996948242185 L9.800000190734863,51.999996948242185 C4.400000095367432,51.999996948242185 0.0,47.60000305175781 0.0,42.19999389648437 L0.0,9.800000190734863 C0.0,4.400000095367432 4.400000095367432,0.0 9.800000190734863,0.0 L151.66621174027466,0.0 C157.06620563675904,0.0 161.46621479203247,4.400000095367432 161.46621479203247,9.800000190734863 L161.46621479203247,42.200009155273435 C161.46621479203247,47.60000305175781 157.06620563675904,52.00001220703125 151.66621174027466,52.00001220703125"
                            style="fill:#ffffff;opacity:1.0;"></path>
                        </g>
                      </svg></div>
                  </div>
                </div>
                <div id="hWUU6SVK721sC3IZ" style="z-index:9;position:relative;">
                  <div id="fpUELYhUf9J7nZNP" style="padding-top:116.27906977%;transform:rotate(0deg);">
                    <div id="ATzcFgp0XzVFMdNv" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
                      <div id="zR0RG7itiSZADtf4" style="width:100%;opacity:1.0;height:100%;">
                        <div id="KjYxzaStPmQrNX7W"
                          style="transform:scale(1, 1);overflow:hidden;width:100%;position:relative;height:100%;">
                          <div id="dZGySqID47Ran0df"
                            style="transform:rotate(0deg);top:0%;left:0%;width:100%;position:absolute;height:100%;opacity:1.0;animation:pulse 1.5s ease-in-out infinite;">
                            <img src="images/0d74ce16bf738c4abab9e96f3c83707e.svg" alt="Apple" loading="lazy"
                              style="display:block;object-fit:cover;width:100%;height:100%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="WMHh43EoIXRfqJ5f" style="z-index:10;position:relative;">
                  <div id="bcGNc4zpjJ1e5Gcu"
                    style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                    <div id="xvtGfSYKiAxKiWM5"
                      style="flex-direction:column;display:flex;width:100%;justify-content:center;opacity:1.0;height:100%;">
                      <p id="OKGpBJexAmp9oE74"
                        style="color:#000000;letter-spacing:-0.02em;font-family:YAEnXHTFXhg-0;line-height:1.1em;"><span
                          id="O9Xr3pjyzOFjhaDo" style="color:#000000;">Get it on the</span><br></p>
                      <p id="kfmLqOmvtD9Dhgus"
                        style="margin-left:0em;text-transform:none;color:#000000;letter-spacing:-0.02em;font-family:YAEnXHTFXhg-0;line-height:1.1em;direction:ltr;">
                        <span id="iCLSDMCLtCZkD1CD" style="color:#000000;font-weight:700;">App Store</span><br></p>
                    </div>
                  </div>
                </div>
              </div>
              <div id="gNpfPXxzNa5gPVsu" style="display:grid;position:relative;grid-area:5 / 3 / 6 / 5;">
                <div id="Ybiycu5KGDu4sVSM" style="z-index:5;position:relative;">
                  <div id="bM00HBNiE6YIwUxi" style="padding-top:32.20488199%;transform:rotate(0deg);">
                    <div id="sUZ9AZ6RGJvRpoqZ" style="top:0px;left:0px;width:100%;position:absolute;height:100%;"><svg
                        id="ZJn28eT2VwFW8rBe" viewBox="0 0 161.4662 52.0"
                        style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                        <g id="HY2iJ7r1tkIoPYbb" style="transform:scale(1, 1);">
                          <path id="xd4JYkdtagCu5vuR"
                            d="M151.6661964814857,51.99999694824221 L9.800000190734863,51.99999694824221 C4.400000095367432,51.99999694824221 0.0,47.60000305175784 0.0,42.1999938964844 L0.0,9.800000190734863 C0.0,4.400000095367432 4.400000095367432,0.0 9.800000190734863,0.0 L151.66621174027478,0.0 C157.06620563675915,0.0 161.4662147920326,4.400000095367432 161.4662147920326,9.800000190734863 L161.4662147920326,42.20000915527346 C161.4662147920326,47.60000305175784 157.06620563675915,52.000012207031276 151.66621174027478,52.000012207031276"
                            style="fill:#ffffff;opacity:1.0;"></path>
                        </g>
                      </svg></div>
                  </div>
                </div>
                <div id="SKzyVpcY3vmuLH6M" style="z-index:6;position:relative;">
                  <div id="LxwtQXUytHOU7cyv" style="padding-top:111.33603239%;transform:rotate(0deg);">
                    <div id="aSM2c4IcTBZ2tByU" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
                      <div id="RmkJamOWc9RJRFOv" style="width:100%;opacity:1.0;height:100%;">
                        <div id="vNeOzO10YtQC5ANu"
                          style="transform:scale(1, 1);overflow:hidden;width:100%;position:relative;height:100%;">
                          <div id="Jnveia1kaw7pGAbX"
                            style="transform:rotate(0deg);top:0%;left:0%;width:100%;position:absolute;height:100%;opacity:1.0;animation:pulse 1.5s ease-in-out infinite;">
                            <img src="images/0ff0695dcef5a8a2083bd53e2f273037.svg" alt="playstore" loading="lazy"
                              style="display:block;object-fit:cover;width:100%;height:100%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="qNqUZ3sU2sipgESZ" style="z-index:7;position:relative;">
                  <div id="dLHkhTV2wQWxNTSo"
                    style="transform:rotate(0deg);width:100%;box-sizing:border-box;height:100%;">
                    <div id="XFkGj050kKhxTQeY"
                      style="flex-direction:column;display:flex;width:100%;justify-content:center;opacity:1.0;height:100%;">
                      <p id="V4RiPa246S53Tecs"
                        style="color:#000000;letter-spacing:-0.02em;font-family:YAEnXHTFXhg-0;line-height:1.1em;"><span
                          id="tk1wLhOmM5AokaoT" style="color:#000000;">Get it on</span><br></p>
                      <p id="ytyB6EoLIADnw05m"
                        style="margin-left:0em;text-transform:none;color:#000000;letter-spacing:-0.02em;font-family:YAEnXHTFXhg-0;line-height:1.1em;direction:ltr;">
                        <span id="qzT29KpsIKrbdFhU" style="color:#000000;font-weight:700;">Google Play</span><br></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="SAI6BBGmVYGDQt1c" style="z-index:4;position:relative;">
              <div id="fj4sipxYpinFBe5p" style="padding-top:197.86718371%;transform:rotate(0deg);">
                <div id="gt1dHUZQEzXJdgkc" style="top:0px;left:0px;width:100%;position:absolute;height:100%;"><svg
                    id="jngtoaujmXSrW3bp" viewBox="0 0 206.3 408.2"
                    style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                    <g id="cxb8eGSOTCJSmZtM" style="transform:scale(1, 1);">
                      <path id="l7lJjqSgEsfR36yn"
                        d="M174.1999969482422,2.0 L32.09999084472656,2.0 C16.69999122619629,2.0 4.199991226196289,14.5 4.199991226196289,29.899999618530273 L4.199991226196289,378.199987411499 C4.199991226196289,393.5999870300293 16.69999122619629,406.0999870300293 32.09999084472656,406.0999870300293 L174.1999969482422,406.0999870300293 C189.59999656677246,406.0999870300293 202.09999656677246,393.5999870300293 202.09999656677246,378.199987411499 L202.09999656677246,29.899999618530273 C202.09999656677246,14.5 189.59999656677246,2.0 174.1999969482422,2.0 M126.89999771118164,14.800000190734863 C128.29999768733978,14.800000190734863 129.39999771118164,15.900000214576721 129.39999771118164,17.300000190734863 C129.39999771118164,18.700000166893005 128.29999768733978,19.800000190734863 126.89999771118164,19.800000190734863 C125.4999977350235,19.800000190734863 124.39999771118164,18.700000166893005 124.39999771118164,17.300000190734863 C124.39999771118164,15.900000214576721 125.59999775886536,14.800000190734863 126.89999771118164,14.800000190734863 M89.99999618530273,15.600000202655792 L113.99999618530273,15.600000202655792 C114.89999616146088,15.600000202655792 115.69999623298645,16.300000190734863 115.69999623298645,17.300000250339508 C115.69999623298645,18.300000309944153 114.89999622106552,19.000000298023224 113.99999618530273,19.000000298023224 L89.99999618530273,19.000000298023224 C89.09999620914459,19.000000298023224 88.29999613761902,18.300000309944153 88.29999613761902,17.300000250339508 C88.29999613761902,16.300000190734863 89.09999614953995,15.600000202655792 89.99999618530273,15.600000202655792 M191.89999771118164,379.80001240968704 C191.89999771118164,388.90001279115677 184.4999976158142,396.30001240968704 175.39999771118164,396.30001240968704 L31.099994659423828,396.30001240968704 C21.9999942779541,396.30001240968704 14.599994659423828,388.9000123143196 14.599994659423828,379.80001240968704 L14.599994659423828,28.800012409687042 C14.599994659423828,19.700012028217316 21.99999475479126,12.300012409687042 31.099994659423828,12.300012409687042 L52.59999465942383,12.300012409687042 L52.59999465942383,16.800012409687042 C52.59999465942383,21.90001231431961 56.799994468688965,26.100012600421906 61.89999485015869,26.100012600421906 L144.59999179840088,26.100012600421906 C149.69999170303345,26.100012600421906 153.89999198913574,21.90001279115677 153.89999198913574,16.800012409687042 L153.89999198913574,12.300012409687042 L175.29999160766602,12.300012409687042 C184.39999198913574,12.300012409687042 191.79999160766602,19.700012505054474 191.79999160766602,28.800012409687042 L191.79999160766602,379.80001240968704 L191.89999771118164,379.80001240968704"
                        style="fill:#142140;opacity:1.0;"></path>
                      <foreignobject id="Me6v3ci81htc3XoO" style="width:206.3px;height:408.2px;">
                        <div id="VdgrtnZhaVzhMcIV"
                          style="clip-path:path(&#x27;m175.3 12.3h-21.4v4.5c0 5.1-4.2 9.3-9.3 9.3h-82.6c-5.1 0-9.3-4.2-9.3-9.3v-4.5h-21.6c-9.1 0-16.5 7.4-16.5 16.5v351c0 9.1 7.4 16.5 16.5 16.5h144.2c9.1 0 16.5-7.4 16.5-16.5v-351c0.1-9.1-7.3-16.5-16.5-16.5z&#x27;);">
                          <div id="DdDhZBNCTBxUvAjE" style="transform:scale(1, 1);transform-origin:103px 204.5px;">
                            <img
                              src=images/mobile-view.png
                              alt="Woman Looking at Company Data on a Laptop" loading="lazy"
                              style="transform:translate(-184.97961172px, 12.3px) rotate(0deg);display:block;object-fit:fill;width:576.36022514px;transform-origin:288.18011257px 192px;opacity:1.0;height:384px;">
                          </div>
                        </div>
                      </foreignobject>
                      <path id="l8vuSLzUbSI4p6sY"
                        d="M114.0,15.600000381469727 L90.0,15.600000381469727 C89.10000002384186,15.600000381469727 88.29999995231628,16.300000369548798 88.29999995231628,17.300000429153442 C88.29999995231628,18.300000488758087 89.09999996423721,19.000000476837158 90.0,19.000000476837158 L114.0,19.000000476837158 C114.89999997615814,19.000000476837158 115.70000004768372,18.300000488758087 115.70000004768372,17.300000429153442 C115.70000004768372,16.300000369548798 114.90000003576279,15.600000381469727 114.0,15.600000381469727"
                        style="fill:#4b4b4b;opacity:1.0;"></path>
                      <path id="M7ObVX81smMxCxt5"
                        d="M126.9000015258789,14.800000190734863 C126.00646994673852,14.799448316641977 125.18057650595628,15.275824803832549 124.73365132830342,16.049554002626337 C124.28672615065057,16.823283201420125 124.28672615065057,17.776716226375285 124.73365132830342,18.550445425169073 C125.18057650595628,19.32417462396286 126.00646994673852,19.800551111153432 126.9000015258789,19.799999237060547 C127.79353310501929,19.800551111153432 128.6194265458015,19.32417462396286 129.06635172345437,18.550445425169073 C129.51327690110725,17.776716226375285 129.51327690110725,16.823283201420125 129.06635172345437,16.049554002626337 C128.6194265458015,15.275824803832549 127.79353310501929,14.799448316641977 126.9000015258789,14.800000190734863"
                        style="fill:#4b4b4b;opacity:1.0;"></path>
                      <path id="QCF5Xd7D9c8a8I0V"
                        d="M0.0,56.099998474121094 L0.0,68.5999984741211 C0.0,69.79999852180481 1.0,70.79999852180481 2.200000047683716,70.79999852180481 L2.200000047683716,53.99999928474426 C1.0,53.99999928474426 0.0,54.899999260902405 0.0,56.09999918937683"
                        style="fill:#d8e6ed;opacity:1.0;"></path>
                      <path id="LrQ3RRza6YigwgVt"
                        d="M0.0,85.4000015258789 L0.0,111.4000015258789 C0.0,112.60000157356262 1.0,113.60000157356262 2.200000047683716,113.60000157356262 L2.200000047683716,83.30000233650208 C1.0,83.30000233650208 0.0,84.20000231266022 0.0,85.40000224113464"
                        style="fill:#d8e6ed;opacity:1.0;"></path>
                      <path id="E1Jetgu1BpTx4lJg"
                        d="M0.0,122.4000015258789 L0.0,148.4000015258789 C0.0,149.60000157356262 1.0,150.60000157356262 2.200000047683716,150.60000157356262 L2.200000047683716,120.20000195503235 C1.0,120.20000195503235 0.0,121.20000195503235 0.0,122.40000200271606"
                        style="fill:#d8e6ed;opacity:1.0;"></path>
                      <path id="gKFM5iGDyiThUZaC"
                        d="M204.10000610351562,93.30000305175781 L204.10000610351562,142.00000381469727 C205.30000615119934,142.00000381469727 206.30000615119934,141.00000381469727 206.30000615119934,139.80000376701355 L206.30000615119934,95.500004529953 C206.30000615119934,94.30000448226929 205.30000615119934,93.30000448226929 204.10000610351562,93.30000448226929"
                        style="fill:#d8e6ed;opacity:1.0;"></path>
                      <path id="E35hiqp1rYAba1F4"
                        d="M204.10000610351562,93.30000305175781 L204.10000610351562,29.900001525878906 C204.10000610351562,27.800001621246338 203.9000061005354,25.800001621246338 203.50000607967377,23.900001525878906 C203.30000607669353,22.900001525878906 203.1000060737133,22.000001549720764 202.8000060915947,21.000001430511475 C202.40000608563423,19.600001454353333 201.8000060915947,18.20000147819519 201.20000606775284,16.900001525878906 C200.80000606179237,16.000001549720764 200.3000060915947,15.20000147819519 199.8000060915947,14.400001525878906 C199.3000060915947,13.600001573562622 198.8000060915947,12.800001502037048 198.20000606775284,12.000001430511475 C197.3000060915947,10.800001382827759 196.40000611543655,9.800001382827759 195.40000611543655,8.70000147819519 C194.70000612735748,8.00000149011612 194.0000061392784,7.400001525878906 193.30000621080399,6.800001502037048 C188.10000640153885,2.500001311302185 181.50000602006912,1.3113021850585938E-6 174.30000621080399,1.3113021850585938E-6 L32.1000092625618,1.3113021850585938E-6 C24.90000945329666,1.3113021850585938E-6 18.200009644031525,2.6000012159347534 13.100009262561798,6.800001502037048 C12.400009274482727,7.400001525878906 11.700009286403656,8.100001454353333 11.00000935792923,8.70000147819519 C10.00000935792923,9.70000147819519 9.00000935792923,10.800001382827759 8.200009405612946,12.000001430511475 C7.600009381771088,12.800001442432404 7.100009381771088,13.600001454353333 6.600009381771088,14.400001525878906 C6.100009381771088,15.20000159740448 5.600009381771088,16.100001573562622 5.200009405612946,16.900001525878906 C4.5000094175338745,18.30000150203705 4.00000935792923,19.600001573562622 3.5000093579292297,21.000001430511475 C3.200009346008301,22.000001430511475 3.0000093579292297,22.900001406669617 2.8000093698501587,23.900001525878906 C2.400009363889694,25.80000150203705 2.200009346008301,27.900001525878906 2.200009346008301,29.900001525878906 L2.200009346008301,378.19998931884766 C2.200009346008301,394.69998931884766 15.600008964538574,408.09998893737793 32.100008964538574,408.09998893737793 L174.2000150680542,408.09998893737793 C190.7000150680542,408.09998893737793 204.10001468658447,394.69998931884766 204.10001468658447,378.19998931884766 L204.10001468658447,93.29999542236328 M202.10000610351562,93.30000305175781 L202.10000610351562,378.3000030517578 C202.10000610351562,393.7000026702881 189.60000610351562,406.2000026702881 174.20000648498535,406.2000026702881 L32.10000038146973,406.2000026702881 C16.700000762939453,406.2000026702881 4.200000762939453,393.7000026702881 4.200000762939453,378.3000030517578 L4.200000762939453,30.000015258789062 C4.200000762939453,14.500015258789062 16.700000762939453,2.0000152587890625 32.10000038146973,2.0000152587890625 L174.20000648498535,2.0000152587890625 C189.60000610351562,2.0000152587890625 202.10000610351562,14.500015258789062 202.10000610351562,29.900014877319336 L202.10000610351562,93.30001640319824"
                        style="fill:#071332;opacity:1.0;"></path>
                    </g>
                  </svg></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="js/73ad2651535b7ecadd366d5fa045dc32c1cdb8fc38f8243601b62b64f4123420.js" async=""
      nonce="d9f0c7bb-6cd1-4c47-ac99-f1b07e9b35dc"></script>
  </div>
  <script nonce="d9f0c7bb-6cd1-4c47-ac99-f1b07e9b35dc">
    const lang = navigator.language ? navigator.language : 'en';
    fetch('_footer?lang=' + encodeURIComponent(lang)).then(response => {
      response.text().then(footerStr => {
        const div = document.createElement('div');
        div.innerHTML = footerStr;
        for (const child of [...div.children]) {
          if (child.tagName.toLowerCase() !== 'script') {
            document.body.append(child);
          }
        }

        (() => { !function () { "use strict"; const e = document.getElementById("modal_backdrop"), t = document.getElementById("report_form"), o = document.getElementById("report_button"), n = document.getElementById("form_report"), c = document.getElementById("form_cancel"), s = document.getElementById("form_submit_reason"), a = document.getElementById("form_go_back"), d = document.getElementById("form_submit_captcha"), l = document.getElementById("form_close"), i = document.getElementById("report_reason_0"), r = document.getElementById("error_message"), m = document.getElementById("error_message_captcha"), u = [document.getElementById("form_step_terms"), document.getElementById("form_step_report_reason"), document.getElementById("form_step_captcha"), document.getElementById("form_step_success")]; function p() { e.classList.remove("active"), t.classList.remove("active"), o.classList.remove("active"), o.focus() } function E(e) { u.forEach(((t, o) => { t.style.display = o === e ? "block" : "none" })) } let _, y = !1; const f = "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION ? () => _ : () => { const e = t.elements.namedItem("g-recaptcha-response"); return null == e ? void 0 : e.value }; e.onclick = p, c.onclick = p, l.onclick = p, o.onclick = function () { u.forEach(((e, t) => { e.style.display = 0 === t ? "block" : "none" })), e.classList.add("active"), t.classList.add("active"), o.classList.add("active"), i.checked = !0, setTimeout((() => { i.focus() }), 350) }, n.onclick = () => E(1), s.onclick = () => { E(2), function () { if (y) return; const e = document.createElement("script"); console.log("our window captcha: ", window.C_CAPTCHA_IMPLEMENTATION, window.C_CAPTCHA_KEY), e.src = "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION ? "https://cstaticdun.126.net/load.min.js" : "https://www.google.com/recaptcha/api.js", e.async = !0, e.defer = !0, document.head.appendChild(e), y = !0, e.onload = "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION ? () => { var e; null === (e = window.initNECaptcha) || void 0 === e || e.call(window, { captchaId: window.C_CAPTCHA_KEY, element: "#netease-captcha", protocol: "https", width: "auto", onVerify: (e, t) => { _ = t.validate } }) } : () => { } }() }, a.onclick = () => E(1), t.addEventListener("submit", (function (e) { e.preventDefault(), r.style.display = "none", m.style.display = "none"; const t = function () { let e = ""; const t = document.getElementsByName("report_reason"); for (let o = 0; o < t.length; o++) { const n = t[o]; !0 === n.checked && (e = n.value) } return e }(), o = f(); if (!o) return void (m.style.display = "block"); const n = { reason: t, challenge: o }, c = window.location.origin + window.location.pathname + "/_api/report"; d.classList.add("loading"), fetch(c, { method: "POST", body: JSON.stringify(n), headers: { "Content-Type": "application/json; charset=utf-8" } }).then((e => { d.classList.remove("loading"), e.ok ? E(3) : r.style.display = "block" })) })) }(); })();
        window.dispatchEvent(new Event('resize'));
      });
    });
  </script>
</body>

</html>

@endsection

