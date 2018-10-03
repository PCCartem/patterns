<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-8 text-left">
            <a class="blog-header-logo text-dark" href="#">Super Observer Service</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            <button class="btn btn-sm btn-outline-secondary" href="#">Выйти</button>
        </div>
    </div>
</header>

<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-muted" href="index.html">Главная</a>
        <a class="p-2 text-muted" href="add.html">Добавить пост</a>
        <a class="p-2 text-muted" href="all.html">Все посты</a>
    </nav>
</div>

<main role="main" class="container">
    <div class="row">
        <form class="col-12 row needs-validation" novalidate="">
            <div class="col-3 mb-2">
                <img class="img-thumbnail" src="https://loremflickr.com/320/240" alt="">
                <img class="img-thumbnail" src="https://loremflickr.com/320/240" alt="">
                <button class="btn btn-success">Загрузить фото</button>
            </div>
            <div class="col-6 mb-2">
                <h4 class="mb-3">Добавление поста</h4>
                <div class="col-md-12 mb-3">
                    <label for="lastName">Заголовок</label>
                    <input class="form-control" id="lastName" placeholder="" value="" required="" type="text">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="firstName">First name</label>
                    <textarea rows="15" class="form-control" id="firstName" placeholder="" required="" type="text">

                                </textarea>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>


                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>

            </div>
            <div class="col-3 mb-2">
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" class="custom-control-input" checked="checked" required="" type="checkbox">
                        <label class="custom-control-label" for="credit">В Контакте</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" class="custom-control-input" required="" type="checkbox">
                        <label class="custom-control-label" for="debit">Инстаграм</label>
                    </div>
                </div>
            </div>
        </form>
    </div>


</main><!-- /.container -->