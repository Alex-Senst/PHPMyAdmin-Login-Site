<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body{
            background-color: #2498db;
            color:rgb(30, 0, 255);
            font-family: Arial, sans-serif;
            margin: 10px;
            padding: 0px;
        }
        h1{
            color: rgb(0, 62, 98);
        }
        h2{
            color:rgb(0, 0, 0);
        }
        .logout-button{
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color:rgb(121, 131, 192);
            color:white;
            border: none;
            cursor: pointer;
            font-size: 20px;
            border-radius: 5px;
        }
        .logout-button:hover{
            background-color:rgb(99, 192, 255);
            color: white;
        }
        header {
            padding: 1px 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }

            nav ul li {
                display: inline;
                margin: 0 15px;
            }

                nav ul li a {
                    text-decoration: none;
                    color: white;
                    font-size: 20px;
                    padding: 10px;
                }

                    nav ul li a.active {
                        font-weight: bold;
                        color:rgb(10, 31, 163);
                        text-decoration: underline;
                    }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="user_dash.php" class="active">Home</a></li>
                <li><a href="user_list.php">View Users</a></li>
                <li><a href="add_user.php">Add Users</a></li>
                <li><a href="logout.php"><button class="logout-button">Logout</button></a>

            </ul>
        </nav>
    </header>
    <h2><b>Welcome to the User Dashboard!</b></h2>
    <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean 
        commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus 
        et magnis dis parturient montes, nascetur ridiculus mus. Donec quam 
        felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla 
        consequat massa quis enim. Donec pede justo, fringilla vel, aliquet 
        nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, 
        venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
        Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean 
        vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat 
        vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, 
        feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. 
        Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. 
        Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. 
        Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper 
        libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, 
        blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio 
        et ante tincidunt tempus. Donec vitae sapien ut libero venenatis 
        faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus 
        tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales 
        sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit 
        cursus nunc
    </p>
    <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean 
        commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus 
        et magnis dis parturient montes, nascetur ridiculus mus. Donec quam 
        felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla 
        consequat massa quis enim. Donec pede justo, fringilla vel, aliquet 
        nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, 
        venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. 
        Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean 
        vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat 
        vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, 
        feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. 
        Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. 
        Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. 
        Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper 
        libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, 
        blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio 
        et ante tincidunt tempus. Donec vitae sapien ut libero venenatis 
        faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus 
        tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales 
        sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit 
        cursus nunc
    </p>
</body>
</html>