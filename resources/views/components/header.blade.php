<style>
    main{
        background: #F7F8F8;
    }
</style>
<main>
    <div class="container col-lg-10 mx-auto p-2 py-4">

    <header>
        <div class="d-flex gap-5">
            <img width="40px" height="28px" src="https://1000logos.net/wp-content/uploads/2023/01/OLX-logo.png" alt="">
            <div class="d-flex gap-3 align-items-center">
                <div class="logo">
                    <i class="bi fs-4 bi-car-front"></i>
                </div>
                <div class="text">
                    <p class="m-0 p-0">MOTORS</p>
                </div>
            </div>
            <div class="d-flex gap-3 align-items-center">
                <div class="logo">
                    <i class="bi fs-4 bi-phone"></i>
                </div>
                <div class="text">
                    <p class="m-0 p-0">Mobile</p>
                </div>
            </div>
        </div>
    </header>
    </div>



    <nav class="col-lg-10 mx-auto">
        <div class="d-flex gap-2 justify-content-between align-items-center">
            <div class="logo">
            <img width="70px" height="40px" src="https://upload.wikimedia.org/wikipedia/commons/9/91/Logotyp_OLX_.png" alt="">
            </div>
            <div class="search d-flex gap-2 w-100">
                <form action="/location" mathod="POST" class="w-25">
                    <select name="location" class="form-control " style="border:2px solid #002F34" id="">
                        <option value="">Islamabad</option>
                        <option value="">Karachi</option>
                        <option value="">Lahore</option>
                        <option value="">Punjab</option>
                        <option value="">KPK</option>
                    </select>
                </form>
                <form action="/search-product" method="POST" class="w-75">
                    <input type="search" style="border:2px solid #002F34" class="form-control"name="product" id="" placeholder="Find Cars, Mobile Phones and more...">
                </form>
            </div>
        
                <div class="d-flex gap-3 justify-content-between align-items-center">
                    <a href="/" style="color:#002F34" class="fw-bolder fs-5" >Login</a>
                    <div class="sell position-relative">
                        <img src="https://www.olx.com.pk/assets/iconSellBorder_noinline.d9eebe038fbfae9f90fd61d971037e02.svg" alt="">
                        <div class="d-flex position-absolute justify-content-center align-items-center" style="top: 50%; left:50%; transform:translate(-50%,-50%)">
                            <i class="bi bi-plus-lg"></i>
                            <p class="m-0 p-0">Sell</p>
                        </div>
                    </div>
                </div>
        
        </div>
    </nav>
</main>