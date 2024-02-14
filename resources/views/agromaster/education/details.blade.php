<x-agromaster-layout :meta="$meta">

    @isset($banner)
        <x-assets.banner title="{{$banner['title']}}" image="{{$banner['image'] ?? ''}}"></x-assets.banner>
    @endisset

        <section class="container">
            <div class="ml-15">
                <div class="row">
                    <div class="col-lg-12 single-notice">
                        <p class="notice-title">
                            Державний біотехнологічний університет<br>
                            61002, м. Харків, вул. Алчевських, 44<br>
                            код згідно з ЄДРПОУ 44234755<br>
                            Одержувач ДБТУ<br>
                            р/р UA 328201720313211001201130739<br>
                            Банк ДКСУ м. Київ<br>
                            МФО 820172
                        </p>

                        <p class="">Призначення платежу: <u>за денне навчання від (ВКАЗАТИ ПРІЗВИЩЕ СТУДЕНТА),
                                факультет МІ, спеціальність 208 Агроінженерія</u>. Номер договору можна не заповнювати або вказати цифру 1.</p>
                        <p class="">Фото квитанції відправити на електронну пошту: <b><u>agromaster.info@ukr.net</u></b></p>
                    </div>
                </div>
            </div>
        </section>

</x-agromaster-layout>
