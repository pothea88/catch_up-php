<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 alert alert-warning">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center alert alert-info">
                        <h4>Information Form</h4>
                    </div>
                    <div class="card-body alert alert-primary">
                    <form action="action.php" method ="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="user">Username:</label><br>
                            <input type="text" name="username" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label><br>
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="num">Age:</label><br>
                            <input type="number" name="age" placeholder="Your age..." class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="em">Email:</label><br>
                            <input type="email" name="emails" placeholder="Your email..." class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ra">Gender:</label><br>
                            <input type="radio" name="gender" value="Male" >Male<br>
                            <input type="radio" name="gender" value="Female" >Female
                        </div>
                        <div class="form-group">
                            <label for="sel">Province:</label>
                            <select name="select" id="" class="form-control">
                                <option value="Phnom Penh">Phnom Penh</option>
                                <option value="Takeo">Takeo</option>
                                <option value="Orddormeanchey">Orddormeanchey</option>
                                <option value="Kompong Tom">Kompong Tom</option>
                                <option value="Prey veng">Prey veng</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inter">Interest:</label><br>
                            <input type="checkbox" name="interest[]" value="Math" >Mathematic <br>
                            <input type="checkbox" name="interest[]" value="PHP" > PHP <br>
                            <input type="checkbox" name="interest[]" value="JavaScript" >JavaScript <br>
                        </div>
                        <div class="form-group">
                            <label for="picture">Picture Profile:</label><br>
                            <input type="file" name="pic">
                        </div>
                        <div class="form-group">
                            <label for="mess">Message:</label><br>
                            <textarea name="message" id="meassage" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <input type="submit" value="SUBMIT" name="submit" class="btn btn-primary">
                        <input type="reset" value="CANCLE" name="clear" class="btn btn-danger float-right"> 
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    
</body>
</html>