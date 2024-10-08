
@extends('layout/header')
@section('content')
<div class="map">
    

{{-- ---------------------------------------------------- --}}

@foreach ($locations as $index => $location)
    <div class="locationPoint l{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}">
        <p class="text-location">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">{{ $location['areaName'] }}</div>
                <div class="popup-cardSubtitle">{{ $location['loName'] }}</div>
            </div>
            <a href="{{ $location['loID'] ? URL::to('/khamphaChiTiet/' . $location['loID']) : '#' }}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ asset('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
@endforeach


{{-- ---------------------------------------------------- --}}




    <div class="locationPoint l01">
        <p class="text-location">01</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">{{ $areaName1 }}</div>
                <div class="popup-cardSubtitle">{{ $location1 ->loName }}</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet/'.$location1->loID)}}">
            {{-- <a href="{{URL::to('/khamphaChiTiet/1')}}"> --}}
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
        
    </div> 
    <div class="locationPoint l02">
        <p class="text-location">02</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">{{ $areaName2 }}</div>
                <div class="popup-cardSubtitle">{{ $location2 ? $location2->loName : 'null' }}</div>
            </div>
            {{-- <a href="{{URL::to('/khamphaChiTiet'.$location2->loID)}}"> --}}
            <a href="{{ $location2 ? URL::to('/khamphaChiTiet/' . $location2->loID) : '#' }}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l03">
        <p class="text-location">03</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">{{ $areaName3 }}</div>
                <div class="popup-cardSubtitle">{{ $location3 ? $location3->loName : 'null' }}</div>
            </div>
            {{-- <a href="{{URL::to('/khamphaChiTiet'. $location3->loID) : '#'}}"> --}}
            <a href="{{ $location3 ? URL::to('/khamphaChiTiet/' . $location3->loID) : '#' }}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
        
    </div>
    <div class="locationPoint l04">
        <p class="text-location">04</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l05">
        <p class="text-location">05</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l06">
        <p class="text-location">06</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l07">
        <p class="text-location">07</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div> 
    <div class="locationPoint l08">
        <p class="text-location">08</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l09">
        <p class="text-location">09</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l10">
        <p class="text-location">10</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l11">
        <p class="text-location">11</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l12">
        <p class="text-location">12</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l13">
        <p class="text-location">13</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l14">
        <p class="text-location">14</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l15">
        <p class="text-location">15</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l16">
        <p class="text-location">16</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l17">
        <p class="text-location">17</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l18">
        <p class="text-location">18</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l19">
        <p class="text-location">19</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l20">
        <p class="text-location">20</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l21">
        <p class="text-location">21</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l22">
        <p class="text-location">22</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l23">
        <p class="text-location">23</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l24">
        <p class="text-location">24</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l25">
        <p class="text-location">25</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l26">
        <p class="text-location">26</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l27">
        <p class="text-location">27</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l28">
        <p class="text-location">28</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l29">
        <p class="text-location">29</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l30">
        <p class="text-location">30</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l31">
        <p class="text-location">31</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l32">
        <p class="text-location">32</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l33">
        <p class="text-location">33</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l34">
        <p class="text-location">34</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l35">
        <p class="text-location">35</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l36">
        <p class="text-location">36</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l37">
        <p class="text-location">37</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l38">
        <p class="text-location">38</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l39">
        <p class="text-location">39</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l40">
        <p class="text-location">40</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l41">
        <p class="text-location">41</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l42">
        <p class="text-location">42</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l43">
        <p class="text-location">43</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l44"> 
        <p class="text-location">44</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div> 
     </div> 
    <div class="locationPoint l45">
        <p class="text-location">45</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l46">
        <p class="text-location">46</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l47">
        <p class="text-location">47</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l48">
        <p class="text-location">48</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l49">
        <p class="text-location">49</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l50">
        <p class="text-location">50</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l51">
        <p class="text-location">51</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l52">
        <p class="text-location">52</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l53">
        <p class="text-location">53</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l54">
        <p class="text-location">54</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l55">
        <p class="text-location">55</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l56">
        <p class="text-location">56</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l57">
        <p class="text-location">57</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l58">
        <p class="text-location">58</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
     <div class="locationPoint l59"> 
        <p class="text-location">59</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div> 
     </div>
    <div class="locationPoint l60">
        <p class="text-location">60</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l61">
        <p class="text-location">61</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    <div class="locationPoint l63">
        <p class="text-location">63</p>
        <div class="popup-location hidden">
            <div class="popup-card">
                <div class="popup-cardTitle">khu 1</div>
                <div class="popup-cardSubtitle">Trò chơi vượt tháp</div>
            </div>
            <a href="{{URL::to('/khamphaChiTiet')}}">
                <div class="popup-cardButton">
                    <img class="popupImg" src="{{ ('/frontEnd/img/logoMoveRight.png') }}" alt="Go">
                </div>
            </a>
        </div>
    </div>
    



    




    <img src="{{ ('/frontEnd/img/Map2.png') }}" alt="map" class="imgMap">

    
</div>



<script>
document.querySelectorAll('.locationPoint').forEach(point => {
    point.addEventListener('click', function() {
        const popup = this.querySelector('.popup-location');
        if (popup.classList.contains('hidden')) {
            popup.classList.remove('hidden');
            popup.style.display = 'block';
        } else {
            popup.classList.add('hidden');
            popup.style.display = 'none';
        }
    });
});
</script>
@endsection 