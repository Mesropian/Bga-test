@extends('layouts.app')
@section('content')
<div class="main__container">
    <div class="title--box">
        <h2 class="page-title">
            Базовый прайслист
        </h2>
        <p class="dscr">Цены не включают 5% НДС <a href="#" class="inf-link"><img src="{{asset('icons/circle.svg')}}"
                    alt="information"></a></p>
    </div>
    <div class="price--list">
        <div class="price-list-item">
            <h5 class="price-title">
                <img src="{{asset('icons/Group.svg')}}" alt="">
                Вариант 1
            </h5>
            <ul class="list">
                <li class="list-item">
                    <p class="list-dscr">Месячный бухучет (консультации + в пределах 100 транзакций)</p>
                    <span class="price">2,000 AED в месяц</span>
                </li>
                <li class="list-item">
                    <p class="list-dscr">Каждые последующий 100 транзакций</p>
                    <span class="price">+1,000 AED в месяц</span>
                </li>
            </ul>
        </div>
        <div class="price-list-item">
            <h5 class="price-title">
                <img src="{{asset('icons/Group.svg')}}" alt="">
                Вариант 2
            </h5>
            <ul class="list">
                <li class="list-item">
                    <p class="list-dscr">Квартальный учет для малого бизнеса если компания уже зарегистрирована к НДС (до 10 документов в месяц, до 2х сотрудников)</p>
                    <span class="price">5,000 AED за квартал (декларация по НДС в цене)</span>
                </li>
               
            </ul>
        </div>
        <div class="price-list-item">
            <h5 class="price-title">
                <img src="{{asset('icons/Group.svg')}}" alt="">
                Вариант 3
            </h5>
            <ul class="list">
                <li class="list-item">
                    <p class="list-dscr">Квартальный учет для малого бизнеса без регистрации к НДС 
                    (до 10 документов в месяц, до 2х сотрудников)</p>
                    <span class="price">3,000 AED за квартал</span>
                </li>
               
            </ul>
        </div>
        <div class="price-list-item">
            <h5 class="price-title">
                <img src="{{asset('icons/Group.svg')}}" alt="">
                Другие услуги
            </h5>
            <ul class="list">
                <li class="list-item">
                    <p class="list-dscr">Внесение в учет транзакций за предыдущие периоды</p>
                    <span class="price">цена договорная</span>
                </li>
                <li class="list-item">
                    <p class="list-dscr">Регистрация к НДС (VAT)</p>
                    <span class="price">2,000 AED разово</span>
                </li>
                <li class="list-item">
                    <p class="list-dscr">Подача НДС (VAT) отчета</p>
                    <span class="price">2,000 AED ежеквартально</span>
                </li>
                <li class="list-item">
                    <p class="list-dscr">Подача запроса на возврат НДС (форма VAT 311)</p>
                    <span class="price">цена договорная</span>
                </li>
                <li class="list-item">
                    <p class="list-dscr">Регистрация к Корпоративному налогу</p>
                    <span class="price">600 AED разово (для компаний уже зарегистрированных к НДС), 1,000 AED разово (для первичной регистрации в FTA</span>
                </li>
                <li class="list-item">
                    <p class="list-dscr">Внесение обязательных изменений в информации о компании</p>
                    <span class="price">500 AED</span>
                </li>
                <li class="list-item">
                    <p class="list-dscr">Регистрация доступа к goAML порталу в Финансовой Полиции</p>
                    <span class="price">1,000 AED</span>
                </li>
                <li class="list-item">
                    <p class="list-dscr">Консультация базовая</p>
                    <span class="price">1,000 AED в час</span>
                </li>   
                <li class="list-item">
                    <p class="list-dscr">Организация проведения аудита (подготовка и передача всей документации для проведения аудита, взаимодействие с аудитором по всем вопросам в отчетности компании)</p>
                    <span class="price">2,000 AED разово</span>
                </li>
                <li class="list-item">
                    <p class="list-dscr">Лицензия на бухгалтерский софт Quickbooks Online</p>
                    <span class="price">100 AED</span>
                </li>   
               
            </ul>
        </div>
    </div>
</div>
@endsection