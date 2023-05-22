<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">



    <style>
button{
    position: absolute;
    top: 6rem;
    left: 57rem;
    color: red;
    background: #191913;

}

.container-popup{
    /* position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    z-index: 1800;
    background: #000000c7;
    display: none;
    overflow: auto;
    display: flex;
    flex-wrap: inherit;
    align-items: center;
    justify-content: space-between;
    width: 100%; */
}

.container-popup {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 6rem;
  background: #000000c7;

}

@media screen and (max-width: 480px) {
    button{
        position: absolute;
    top: 6rem;
    left: 19.6rem;
    color: red;
    background: #191913;
}
}
        </style>
</head>
<body>
    <div class="container-popup">
    <div class="popup">
    <button id="close">&times;</button>
  <img src="	https://flighttripsmart.com/Images/Popup_Inner.jpg"  alt="..." style="width: 45vh">
    </div>



    <script>
        window.addEventListener("load",function(){
            setTimeout(
                function open(event){
                    document.querySelector(".popup").style.display="block"
                },
                1000
            )
        });
        document.querySelector("#close").addEventListener('click', function(){
            document.querySelector(".popup").style.display="none"
});
        </script>

</body>
</html>