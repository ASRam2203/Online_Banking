<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
    margin: 0;
    padding: 0;
    background-color:  #FAFAFA;
}

.flex-container-header {
    display: -webkit-flex;
    display: flex;
    width: auto;
    height: auto;
    background-color: #263238;
}

.flex-item-header {
    width: auto;
    height: 100px;
    margin: 10px;
}

h1 {
    font-family: OpenSans-Light;
    color: white;
    font-size: 3rem;
    line-height: 3rem;
    margin-top: calc((1.5rem - 2rem) + 2.5rem);
    margin-bottom: 1.5rem;
}
    </style>
</head>

<body>
    <div class="flex-container-header">
        <div class="flex-item-header">
            <img src="profile_picture.webp"  width="100" height="100">
        </div>
        <div class="flex-item-header">
            <h1>Online Banking</h1>
        </div>
    </div>

</body>
</html>