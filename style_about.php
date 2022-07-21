*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}
header{
    position: relative;
    max-width: 1200px;
    margin: 20px auto;
    padding: 10px;
    background: #fff;
    box-sizing: border-box;
    border-radius: 4px;
    box-shadow: 2px 2px 5px rgba(0,0,0,.2);
}
.logo{
    color: #813909;
    height: 60px;
    font-size: 36px;
    line-height: 60px;
    padding: 0 20px;
    text-align: center;
    box-sizing: border-box;
    float: left;
    font-weight: 700;
    text-decoration: none;
}
nav{
    float: right;
}
.clearfix{
    clear: both;
}
nav ul{
    margin: 0;
    padding: 0;
    display: flex;
}
nav ul li{
    list-style: none;
}
nav ul li a{
    display: block;
    margin: 10px 0;
    padding: 10px 20px;
    text-decoration: none;
    color: #262626;
}
nav ul li a.active,
nav ul li a:hover{
    background:  #813909;
    color: #fff;
    transition: 0.5s;
}
@media (max-width: 1200px){
    header{
        margin: 20px;
    }
}
@media (max-width: 768px){
    .menu-toggle{
        display: 40px;
        height: 40px;
        width: 40px;
        margin: 10px;
        float: right;
        cursor: pointer;
        text-align: center;
        font-size: 30px;
        color: #813909;
    }
    .menu-toggle:before{
        content: '\f0c9';
        font-family: fontAwesome;
        line-height: 40px;
    }
    .menu-toggle.active:before{
        content: '\f00d';
        }
    nav{
        display: none;
    }
    nav.active{
        display: block;
        width: 100%;
    }
    nav.avtive ul{
        display: block;
    }
}
footer{
    position: fixed;
    display: inline-block;
    bottom: 0px;
    width: 100%;
    background: #fff
}
.footertop{
    position: relative;
    display: inline-block;
    height: auto;
    width: 100%;
    margin: 0;
    padding: 0;
    background: #fff;
    color: #813909;
}
.footerbottom{
    position: relative;
    display: inline-block;
    width: 98%;
    height: 10px;
    margin: 10px;
    margin-top: 0;
    background: #fff;
    padding: 0;
    font-size: 65%;
    text-align: center;
    content: inherit;
}
a{
    color: inherit;
    text-decoration: none;
}
.medsos{
    padding: 5px 0;
    background-color: #813909;
    text-align: center;

}
.medsos ul{
    padding-inline-start: 0;

}
.medsos ul li{
    display: inline-block;
    color: #fff;
    margin-right: 10px;
    height: 50px;
    width: 50px;
    border-radius: 4px;
    box-sizing: border-box;
    line-height: 50px;
    text-align: center;
    font-size: 18px;
    border-radius: 5px;
    box-shadow: 0px 2px 5px rgba(0,0,0,.2);
}
nav ul li a:hover{
    background: #813909;
    color: #fff;
    transition: 0,5s;
}
.medsos ul li:hover{
    background: #9e610a;
}
