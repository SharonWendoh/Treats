<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../styles/adminstyle.css">
</head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
           <h2> <span class="lab la-accusoft"></span> <span>Drip Wear</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <Li><a href="" class="active"><span class="las la-igloo"></span><span>Dashboard</span></a></Li>
                <Li><a href=""><span class="las la-users"></span><span>Users</span></a></Li>
                <Li><a href=""><span class="las la-clipboard-list"></span><span>Categories</span></a></Li>
                <Li><a href=""><span class="las la-shopping-bag"></span><span>Orders</span></a></Li>
                <Li><a href=""><span class="las la-receipt"></span><span>Items</span></a></Li>
                <Li><a href=""><span class="las la-user-circle"></span><span>Tokens</span></a></Li>
                <Li><a href=""><span class="las la-clipboard-list"></span><span>Payments</span></a></Li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>

                Dashboard
            </h2>
            <div class="search-wrapper">
               <span class="las la-search"></span> 
               <input type="search" placeholder="Search here"/>
            </div>
            <div class="user-wrapper">
                <img src="../images/IMG_1827.JPG" width="40px" height="40px" alt="">
                <div>
                    <h4>Sharon Wendoh</h4>
                    <small>Super admin</small>
                    <h4>Sign out</h4>
                </div>
            </div>
        </header>
        <main>