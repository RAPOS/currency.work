<div class="tour-selection-box">
    <div class="tabs-block js-active-tabs">
        <div class="tabs-bar tabs-bar--responsive tab-fly-widget-tabs-bar-container">
            <h2 class="tab tab-menu-item-element no-select-text disabled" data-tab="complex" data-url="" data-container-ready="1" onclick="nl_count_params(1001, 394, 6, 0);" data-is-link="0" data-history="1">Параметры тура</h2>
            <h2 class="tab tab-menu-item-element no-select-text active" data-tab="simple" data-url="" data-container-ready="1" onclick="nl_count_params(1001, 394, 5, 0);" data-is-link="0" data-history="1">Нестандартный запрос</h2>
            <div class="line tab-menu-line-element" tag="div" style="left: 0px; width: 130px;"></div>
        </div>
        <div id="tab-simple" class="panel js-active-pane form-hinted tab-menu-container-element" data-tab="simple" style="display:none;">
            <div class="bth__cnt uppercase js-info-tour">Заявка на подбор тура профессиональным специалистам</div>
            <div class="booking-form-step">
                <form id="booking-form-simple" action="/order/send" method="post">
                    <input type="hidden" id="oracle-user-simple" name="BookingForm[userOracleId]" value="1548240310259947">                <div class="tour-selection-wrap">
                        <div class="section  orders-step ">
                            <div class="">
                                <input type="hidden" id="bookingform-bookingcityid" name="BookingForm[bookingCityId]" value="388">                            <input type="hidden" id="bookingform-allocationid" name="BookingForm[allocationId]">                            <input type="hidden" id="bookingform-resortid" name="BookingForm[resortId]">                            <input type="hidden" id="bookingform-countryid" name="BookingForm[countryId]">                            <!--<input type="text" class="bth__inp bold js-label js-suggest-direction" id="country" data-target="#simple-suggest-dd">
                            <label for="country" class="bth__inp-lbl">Укажите страну, курорт или отель</label>
                            <div class="hint-block hint-block--abs" style="display: none">
                                <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                <div class="hint">
                                    <p class="bth__cnt"></p>
                                </div>
                            </div> -->
                                <div class="suggest-dd" id="simple-suggest-dd" style="display: none">
                                    <script type="application/x-dot-template">
                                        {{? it.allocations && it.allocations.length > 0 }}
                                        <ul class="suggest-dd-res">
                                            <li class="suggest-dd-res-category">
                                                Отели
                                            </li>
                                            {{~it.allocations :allocation:i}}
                                            <li class="suggest-dd-res-i">
                                                <a href="javascript:void(0)" class="suggest-dd-res-resort"
                                                   data-type="allocation"
                                                   data-id="{{=allocation.id}}">
                                                    {{=allocation.name}}
                                                    <span class="suggest-dd-res-r">{{=allocation.location}}</span>
                                                </a>
                                                <div class="clear-both"></div>
                                            </li>
                                            {{~}}
                                        </ul>
                                        {{?}}
                                        {{? it.resorts && it.resorts.length > 0 }}
                                        <ul class="suggest-dd-res">
                                            <li class="suggest-dd-res-category">
                                                Курорты
                                            </li>
                                            {{~it.resorts :resort:i}}
                                            <li class="suggest-dd-res-i">
                                                <a href="javascript:void(0)" class="suggest-dd-res-resort"
                                                   data-type="resort" data-id="{{=resort.id}}" data-text="{{=resort.name}}">
                                                    {{=resort.name}}
                                                    <span class="suggest-dd-res-r">{{=resort.country_name}}</span>
                                                </a>
                                                <div class="clear-both"></div>
                                            </li>
                                            {{~}}
                                        </ul>
                                        {{?}}
                                        {{? it.countries && it.countries.length > 0 }}
                                        <ul class="suggest-dd-res">
                                            <li class="suggest-dd-res-category">
                                                Страны
                                            </li>
                                            {{~it.countries :country:i}}
                                            <li class="suggest-dd-res-i">
                                                <a href="javascript:void(0)" class="suggest-dd-res-resort"
                                                   data-type="country" data-id="{{=country.id}}" data-text="{{=country.name}}">
                                                    {{=country.name}}
                                                </a>
                                            </li>
                                            {{~}}
                                        </ul>
                                        {{?}}
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="tour-selection-wrap-in">
                            <div class="bth__inp-block long">
                                <textarea class="bth__inp  bold js-stop-label" id="bookingform-comment-simple" name="BookingForm[comment]"></textarea>
                                <label for="bookingform-comment-simple" class="bth__inp-lbl">
                                    <span class="block mb5">- укажите страну, курорт или отель</span>
                                    <span class="block mb5">- количество человек</span>
                                    <span class="block mb5">- ваши предпочтения по отелю</span>
                                    <span class="block mb5">- ваш бюджет</span>
                                    <span class="block">- другие пожелания</span>
                                </label>
                            </div>
                        </div>
                        <div class="tour-selection-wrap-in tour-selection-wrap-flex">
                            <div class="tour-selection-field tour-selection-field--30p">
                                <div class="bth__inp-block field-bookingform-name required">
                                    <input type="text" id="bookingform-name" class="bth__inp js-label js-user-name" name="BookingForm[name]" aria-required="true">
                                    <label class="bth__inp-lbl" for="bookingform-name">Ваше имя</label>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="tour-selection-field tour-selection-field--30p">
                                <div class="bth__inp-block phone-input-block field-bookingform-phone required">
                                    <span class="js-phone-flag"></span><input type="text" id="bookingform-phone" class="bth__inp js-label js-user-phone" name="BookingForm[phone]" aria-required="true"><label class="bth__inp-lbl" for="bookingform-phone">Телефон</label><div class="help-block"></div>
                                </div>
                            </div>
                            <div class="tour-selection-field tour-selection-field--30p">
                                <div class="bth__inp-block field-bookingform-email">
                                    <input type="text" id="bookingform-email" class="bth__inp js-label js-user-email" name="BookingForm[email]">
                                    <label class="bth__inp-lbl" for="bookingform-email">Email (не обязательно)</label>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <button class="bth__btn  bth__btn--fill  js-show-error mt20">
                            Отправить заявку*
                            <div class="bth__loader-spin">
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                                <i class="fas fa-circle"></i>
                            </div>
                        </button>
                        <div class="registration__btn-text registration__btn-text--abs registration__btn-text--abs-simple static mt10 block">
                            <p class="bth__cnt bth__cnt--sm" style="margin-bottom: 0">
                                *Нажимая на кнопку "отправить", я принимаю
                                <a href="#p-agreement-pp" class="p-agreement-pp agree js-order-agreement">Соглашение об обработке персональных данных</a> и
                                <a href="#p-agreement-pp" class="p-agreement-pp js-order-agreement site-role">Правила сайта</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="booking-form-step" style="display: none">
                <div class="bth__cnt fz18 bold mb10">
                    Спасибо, Ваша заявка <span class="js-simple-booking-id hidden"></span> отправлена и будет обработана в ближайшее время.                </div>
                <!--                <div class="js-order-user-block hidden">
                    <div class="mt40 bth__cnt fz18 ">Вы можете оценить работу агента в своем
                        <a href="/account/notices/orders">личном кабинете </a> в разделе Заявки.
                    </div>
                </div>-->
                <div class="js-order-auth-block">
                    <div class="mt20 bth__cnt fz18 ">
                        Если у Вас нет регистрации, это легко сделать за 30 секунд.</div>
                    <a href="/auth/login#reg" target="_blank" class="bth__btn  bth__btn--fill  d-ib mt40 mr10">Регистрация</a>
                    <a href="/auth/login" target="_blank" class="bth__btn bth__btn--290  d-ib  mt40">Авторизация</a>
                </div>
            </div>
        </div>
    </div>
</div>