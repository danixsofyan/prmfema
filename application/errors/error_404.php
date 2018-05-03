<!DOCTYPE html>
<html lang="en">
<head>
<title>404 Page Not Found</title>
<style type="text/css">

::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }

body {
    background: #fc5959;
    color: #fff;
    text-align: center;
    margin-top: 10%;
    font-family: 'Open Sans', sans-serif;
}

a {
  color: #fff;
  background-color: transparent;
  font-weight: normal;
  font-family: 'Open Sans', sans-serif;
  text-decoration: none;

}

p{
  color: #fc9c9c;
}

h1 {
    font-size: 70px;
    font-weight: 300;
    margin: -50px 0 0 0;
}

code {
  font-size: 12px;
  background-color: #f9f9f9;
  border: 1px solid #D0D0D0;
  color: #002166;
  display: block;
  margin: 14px 0 14px 0;
  padding: 12px 10px 12px 10px;
}

#container {

}

p {
  margin: 12px 15px 12px 15px;
}
</style>
</head>
<body>
  <div id="container">
    <img src="/prm/assets/img/404_icon.png" alt="">
    <h1><?php echo $heading; ?></h1>
    <p><?php echo $message; ?><a href="/prm/">Return Home</a></p>
  </div>
</body>
</html>