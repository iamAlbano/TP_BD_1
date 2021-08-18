<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.16.1/standard-all/ckeditor.js"></script>

  <style>
    /* body {
      background-image: linear-gradient(323deg, rgba(255, 255, 255, 0.01) 0%, rgba(255, 255, 255, 0.01) 16.667%, rgba(46, 46, 46, 0.01) 16.667%, rgba(46, 46, 46, 0.01) 33.334%, rgba(226, 226, 226, 0.01) 33.334%, rgba(226, 226, 226, 0.01) 50.001000000000005%, rgba(159, 159, 159, 0.01) 50.001%, rgba(159, 159, 159, 0.01) 66.668%, rgba(149, 149, 149, 0.01) 66.668%, rgba(149, 149, 149, 0.01) 83.33500000000001%, rgba(43, 43, 43, 0.01) 83.335%, rgba(43, 43, 43, 0.01) 100.002%), linear-gradient(346deg, rgba(166, 166, 166, 0.03) 0%, rgba(166, 166, 166, 0.03) 25%, rgba(240, 240, 240, 0.03) 25%, rgba(240, 240, 240, 0.03) 50%, rgba(121, 121, 121, 0.03) 50%, rgba(121, 121, 121, 0.03) 75%, rgba(40, 40, 40, 0.03) 75%, rgba(40, 40, 40, 0.03) 100%), linear-gradient(347deg, rgba(209, 209, 209, 0.01) 0%, rgba(209, 209, 209, 0.01) 25%, rgba(22, 22, 22, 0.01) 25%, rgba(22, 22, 22, 0.01) 50%, rgba(125, 125, 125, 0.01) 50%, rgba(125, 125, 125, 0.01) 75%, rgba(205, 205, 205, 0.01) 75%, rgba(205, 205, 205, 0.01) 100%), linear-gradient(84deg, rgba(195, 195, 195, 0.01) 0%, rgba(195, 195, 195, 0.01) 14.286%, rgba(64, 64, 64, 0.01) 14.286%, rgba(64, 64, 64, 0.01) 28.572%, rgba(67, 67, 67, 0.01) 28.572%, rgba(67, 67, 67, 0.01) 42.858%, rgba(214, 214, 214, 0.01) 42.858%, rgba(214, 214, 214, 0.01) 57.144%, rgba(45, 45, 45, 0.01) 57.144%, rgba(45, 45, 45, 0.01) 71.42999999999999%, rgba(47, 47, 47, 0.01) 71.43%, rgba(47, 47, 47, 0.01) 85.71600000000001%, rgba(172, 172, 172, 0.01) 85.716%, rgba(172, 172, 172, 0.01) 100.002%), linear-gradient(73deg, rgba(111, 111, 111, 0.03) 0%, rgba(111, 111, 111, 0.03) 16.667%, rgba(202, 202, 202, 0.03) 16.667%, rgba(202, 202, 202, 0.03) 33.334%, rgba(57, 57, 57, 0.03) 33.334%, rgba(57, 57, 57, 0.03) 50.001000000000005%, rgba(197, 197, 197, 0.03) 50.001%, rgba(197, 197, 197, 0.03) 66.668%, rgba(97, 97, 97, 0.03) 66.668%, rgba(97, 97, 97, 0.03) 83.33500000000001%, rgba(56, 56, 56, 0.03) 83.335%, rgba(56, 56, 56, 0.03) 100.002%), linear-gradient(132deg, rgba(88, 88, 88, 0.03) 0%, rgba(88, 88, 88, 0.03) 20%, rgba(249, 249, 249, 0.03) 20%, rgba(249, 249, 249, 0.03) 40%, rgba(2, 2, 2, 0.03) 40%, rgba(2, 2, 2, 0.03) 60%, rgba(185, 185, 185, 0.03) 60%, rgba(185, 185, 185, 0.03) 80%, rgba(196, 196, 196, 0.03) 80%, rgba(196, 196, 196, 0.03) 100%), linear-gradient(142deg, rgba(160, 160, 160, 0.03) 0%, rgba(160, 160, 160, 0.03) 12.5%, rgba(204, 204, 204, 0.03) 12.5%, rgba(204, 204, 204, 0.03) 25%, rgba(108, 108, 108, 0.03) 25%, rgba(108, 108, 108, 0.03) 37.5%, rgba(191, 191, 191, 0.03) 37.5%, rgba(191, 191, 191, 0.03) 50%, rgba(231, 231, 231, 0.03) 50%, rgba(231, 231, 231, 0.03) 62.5%, rgba(70, 70, 70, 0.03) 62.5%, rgba(70, 70, 70, 0.03) 75%, rgba(166, 166, 166, 0.03) 75%, rgba(166, 166, 166, 0.03) 87.5%, rgba(199, 199, 199, 0.03) 87.5%, rgba(199, 199, 199, 0.03) 100%), linear-gradient(238deg, rgba(116, 116, 116, 0.02) 0%, rgba(116, 116, 116, 0.02) 20%, rgba(141, 141, 141, 0.02) 20%, rgba(141, 141, 141, 0.02) 40%, rgba(152, 152, 152, 0.02) 40%, rgba(152, 152, 152, 0.02) 60%, rgba(61, 61, 61, 0.02) 60%, rgba(61, 61, 61, 0.02) 80%, rgba(139, 139, 139, 0.02) 80%, rgba(139, 139, 139, 0.02) 100%), linear-gradient(188deg, rgba(227, 227, 227, 0.01) 0%, rgba(227, 227, 227, 0.01) 20%, rgba(105, 105, 105, 0.01) 20%, rgba(105, 105, 105, 0.01) 40%, rgba(72, 72, 72, 0.01) 40%, rgba(72, 72, 72, 0.01) 60%, rgba(33, 33, 33, 0.01) 60%, rgba(33, 33, 33, 0.01) 80%, rgba(57, 57, 57, 0.01) 80%, rgba(57, 57, 57, 0.01) 100%), linear-gradient(90deg, hsl(237, 0%, 13%), hsl(237, 0%, 13%));
    } */

    /* Geral*/


    /*login */

    .form-signin {
      width: 30%;
      padding: 1em;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-right: -50%;
      transform: translate(-50%, -50%);
    }


    /* ----- feed/home -----*/
    .home {
      padding-top: 8em;
    }

    .user-data {
      font-size: 10pt;
      position: absolute;
      margin-left: 3em;
      margin-top: -2.5em;
    }

    .post {
      padding-top: 0;
    }

    .user-post {
      height: 3rem;

    }

    .post-text {

      margin-top: 1em;
    }

    .post-preview > p {
      margin: 0;
      margin-top: 3rem;
    }

    .feed-top-elements {
      justify-content: center;
      margin: 8rem 0;
    }

    .feed-elements {
      box-shadow: 0px 0px 10px 2px rgb(0 0 0 / 15%);
      border-radius: .75rem;
      margin-top: 4vh;
    }
    .category-element {
      font-weight: 700;
      font-size: 15px;
      color:  #999999;
    }
    /*
    .new-post-element {
      margin-top: 18vh !important;
    }
    */

    .ck-editor__editable {
      min-height: 350px;
    }

    .new-post-btn-row {
      justify-content: center;
      margin: 2rem 0 1rem;
    }

    /*----- New post page -----*/
    .new-post-section-row {
      justify-content: center;
    }

    .new-post-input {
      margin-bottom: 2rem;
    }

    /* new post video form*/
    .cke_widget_element > div > iframe {
      width: 60%;
      height: 50%;
      left: 25%;
    }

    /* ------ Post Page ----- */
    .post-page-row {
      margin-bottom: 2rem;
    }

    #new-comment-form {
      padding-left: 2rem;
      font-size: 18px;
      color: gray;
    }

    .media-link {
      margin: 2rem 0;
    }

    .new-comment-label {
      margin-bottom: 1rem;
    }

    .comment-btn-row {
      justify-content: center;
      margin-top: 1rem;
    }

    .comment-btn {
      width: 13%;
    }

    .comment-element {
      padding: 2rem;
    }

    /*FOOTER*/
    footer {
      text-align: center;
    }

    footer .copyrights {
      background-color: rgba(62, 62, 62, 1);
      color: rgba(200, 200, 200, 1);
      padding: .25rem 1.75rem;
    }
  </style>

  <title>Projeto</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>