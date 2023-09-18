@extends('layouts.layout')

@section('content')
<div class="overlay__popup" style="display:none;"></div>
<div class="float__tooltip--box" style="display:none;">
    <p></p>
</div>
<div class="main__container">
    <div class="side__box history" style="display:none;">
        <div class="head__history border">
            <p>Finder History</p>
            <div class="placeholder__text nonvisible">
                <div></div>
                <span>150 emails found</span>
            </div>
            <a href="#"><img src="img/closemodal.svg" alt="closemodal"></a>
        </div>
        <div class="list__campaigns campaigns__v--placeholder" style="overflow-y:hidden;">
            <!-- <div class="placeholder__wrapper">
                <div class="elem__placeholder">
                    <div class="placeholder__left">

                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__left">
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">

                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__left">
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">

                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__left">
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">

                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__left">
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">

                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__left">
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">

                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__left">
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">

                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__left">
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">

                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__left">
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">

                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__left">
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">

                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__left">
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">

                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__left">
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                </div>
                <div class="elem__placeholder">
                    <div class="placeholder__left">

                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                    <div class="placeholder__left">
                        <div class="placeholder__desc">
                            <span class="longer"></span>
                            <span class="shorter"></span>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="finder__list">

            </div>
        </div>
    </div>
    <div class="box__verification">
        <form action="" class="finder__search">
            @csrf
            <div class="head__verification">
                <p>Finder</p>
                <div class="controls__button">
                    <a href="#" class="outline-btn history__domain"><span><img src="img/history.svg" alt="history"></span>History</a>
                </div>
            </div>
            <div class="search__field">
                <div class="group__input">
                    <div class="finder__input group__input">
                        <input type="text" placeholder="First name" class="first-name" value="rui">
                        <input type="text" placeholder="Last name" class="last-name" value="hiraki">
                        <input type="text" placeholder="Company" class="company" value="tesla.com">
                    </div>
                    <button type="submit"><span><img src="img/searchwhite.svg" alt="searchwhite"></span> Search</button>
                </div>
                <div class="error__message" style="display:none;">
                    <p class="error__label"><span><img src="img/error.svg" alt="error"></span> Please enter a valid name
                        and company.</p>
                </div>
            </div>
            <div class="searching" style="display:none;">
                <p>Searching for something</p>
            </div>


            <div class="company__elem" style="display:none;">
                <p></p>
                <div class="finder__list finder__list__result">
                </div>
                <div class="pagination">
                    <p>Page 1 of 1</p>
                    <div class="controls__wrapper">
                        <a href="#" class="outline-btn disabled prev-btn">Previous</a>
                        <a href="#" class="outline-btn disabled next-btn">Next</a>
                    </div>
                </div>
            </div>

            <!-- <div class="company__elem" data-name="Elon Musk" data-company="Tesla" style="display:none;">
                <div class="top__company">
                    <div class="lf__company">
                        <span><img src="img/success.svg" alt="success"></span>
                        <div class="company__desc">
                            <p>James@apple.com</p>
                            <span>Your email is on good mood.</span>
                        </div>
                    </div>
                    <div class="rg__company">
                        <div class="circle" data-value="0.92" data-size="38" data-empty="#E4E4E7" data-thickness="2"
                            data-color="#629B81"></div>
                        <span>92</span>
                    </div>
                </div>
                <div class="company__grid">
                    <div class="el__company">
                        <span><img src="img/success.svg"></span>
                        <p>Email: James</p>
                    </div>
                    <div class="el__company">
                        <span><img src="img/success.svg"></span>
                        <p>Spam-trap: no</p>
                    </div>
                    <div class="el__company">
                        <span><img src="img/success.svg"></span>
                        <p>Domain: apple.com</p>
                    </div>
                    <div class="el__company">
                        <span><img src="img/error.svg" alt="error"></span>
                        <p>Disposable: yes</p>
                    </div>
                    <div class="el__company">
                        <span><img src="img/success.svg"></span>
                        <p>Syntax error: no</p>
                    </div>
                    <div class="el__company">
                        <span><img src="img/success.svg"></span>
                        <p>Accept-all: no</p>
                    </div>
                    <div class="el__company">
                        <span><img src="img/success.svg"></span>
                        <p>Role: no</p>
                    </div>
                    <div class="el__company">
                        <span><img src="img/success.svg"></span>
                        <p>Free Email: no</p>
                    </div>
                </div>
            </div> -->
        </form>
    </div>

</div>
@endsection