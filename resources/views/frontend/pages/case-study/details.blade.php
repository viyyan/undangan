<?php
/**
 * Case Study details
 */
?>
@extends('frontend.layouts.basic')
@section('content')

<div class="blog__detail__cover">
    <div class="card card--info-inside">
    <div class="card__thumb">
        <div class="card__thumb__image"><img src="{{ frontImages('cover.jpg') }}" alt=""></div>
    </div>
    <div class="card__info">
        <div class="card__info__inner">
        <div class="card__category category"><span class="category__main">Retail Census</span></div>
        <div class="card__title">
            <h3 class="card__title__main text--2xl">Consumer behavior in the Covid recovery: Polarizing “moving-on mindsets” within retail</h3>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="blog__detail__main bg--content text--black">
    <div class="container container--lg">
    <div class="grid">
        <div class="column--20">
            <h4 class="sub--title_section">Challenge</h4>
        </div>
        <div class="column--80">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non tincidunt ex. Ut commodo justo eget felis fringilla aliquet. Fusce in accumsan dui. Morbi elementum massa volutpat risus maximus, feugiat sodales dolor semper. Mauris justo quam, iaculis vitae diam a, pretium interdum risus. Donec sagittis odio quis rutrum finibus. Integer eleifend ullamcorper euismod. Phasellus sed gravida mauris. Cras lacinia vitae sapien vel semper. Nam sed tellus neque. Sed nunc eros, commodo sit amet volutpat eu, rhoncus vel urna. Etiam at scelerisque mauris, vel sagittis lectus. In ac eros arcu. Aliquam elementum rhoncus placerat. Donec dignissim, diam quis elementum faucibus, massa odio auctor eros, semper ultrices lacus risus lobortis quam. Integer non lectus placerat, tristique sapien et, consectetur lectus.</p>
        </div>
    </div>
    <div class="grid">
        <div class="column--20">
            <h4 class="sub--title_section">Business Issue</h4>
        </div>
        <div class="column--80">
            <p>Fusce massa neque, condimentum vel mattis ut, finibus in dui. Etiam commodo quam a ex condimentum tincidunt. Morbi eu laoreet dolor. Curabitur pellentesque, urna et sagittis molestie, nisl justo faucibus justo, in consectetur lorem purus non lacus. Nulla ipsum augue, feugiat vitae elit nec, porta eleifend nunc. Pellentesque magna lorem, viverra vel est id, posuere bibendum erat. Aliquam blandit eget risus non egestas. Quisque quis velit non ante imperdiet tincidunt. Vestibulum eu mollis magna. Nunc feugiat felis nec ante euismod, vel mattis metus gravida. Donec gravida molestie lectus, ut porta ante. Morbi finibus consequat est, sed ullamcorper est cursus tempor. Nulla volutpat eget turpis vel pulvinar. Nullam placerat consectetur enim a malesuada. Proin a dignissim orci, sed sollicitudin diam. Etiam sed congue justo, vitae ullamcorper quam. Sed in quam eu libero eleifend porta. Vestibulum libero libero, accumsan at diam vel, lobortis mattis orci. Mauris commodo eros a lacinia bibendum. Maecenas rhoncus metus felis, sed feugiat tellus finibus quis. Nulla auctor congue arcu, in elementum nunc mollis vitae. Phasellus in posuere mauris. In a tellus porta, mattis purus in, consectetur nulla.</p>
        </div>
    </div>
    <div class="grid">
        <div class="column--20">
            <h4 class="sub--title_section">Approach</h4>
        </div>
        <div class="column--80">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non tincidunt ex. Ut commodo justo eget felis fringilla aliquet. Fusce in accumsan dui. Morbi elementum massa volutpat risus maximus, feugiat sodales dolor semper. Mauris justo quam, iaculis vitae diam a, pretium interdum risus. Donec sagittis odio quis rutrum finibus. Integer eleifend ullamcorper euismod. Phasellus sed gravida mauris. Cras lacinia vitae sapien vel semper. Nam sed tellus neque. Sed nunc eros, commodo sit amet volutpat eu, rhoncus vel urna. Etiam at scelerisque mauris, vel sagittis lectus. In ac eros arcu. Aliquam elementum rhoncus placerat. Donec dignissim, diam quis elementum faucibus, massa odio auctor eros, semper ultrices lacus risus lobortis quam. Integer non lectus placerat, tristique sapien et, consectetur lectus.</p>
        </div>
    </div>
    <div class="blog__detail__share"><strong>Share this</strong>
        <div class="button__social">
        <div class="button__group"><a class="button button--line button--square button--primary button--md" href="#"><span class="button__content"><span class="button__icon">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568C480.224,136.96,497.728,118.496,512,97.248z"></path>
                </svg></span></span></a><a class="button button--line button--square button--primary button--md" href="#"><span class="button__content"><span class="button__icon">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
                </svg></span></span></a><a class="button button--line button--square button--primary button--md" href="#"><span class="button__content"><span class="button__icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.693 56.693">
                    <path d="M30.071,27.101v-0.077c-0.016,0.026-0.033,0.052-0.05,0.077H30.071z"></path>
                    <path d="M49.265,4.667H7.145c-2.016,0-3.651,1.596-3.651,3.563v42.613c0,1.966,1.635,3.562,3.651,3.562h42.12   c2.019,0,3.654-1.597,3.654-3.562V8.23C52.919,6.262,51.283,4.667,49.265,4.667z M18.475,46.304h-7.465V23.845h7.465V46.304z    M14.743,20.777h-0.05c-2.504,0-4.124-1.725-4.124-3.88c0-2.203,1.67-3.88,4.223-3.88c2.554,0,4.125,1.677,4.175,3.88   C18.967,19.052,17.345,20.777,14.743,20.777z M45.394,46.304h-7.465V34.286c0-3.018-1.08-5.078-3.781-5.078   c-2.062,0-3.29,1.389-3.831,2.731c-0.197,0.479-0.245,1.149-0.245,1.821v12.543h-7.465c0,0,0.098-20.354,0-22.459h7.465v3.179   c0.992-1.53,2.766-3.709,6.729-3.709c4.911,0,8.594,3.211,8.594,10.11V46.304z"></path>
                </svg></span></span></a><a class="button button--line button--square button--primary button--md" href="#"><span class="button__content"><span class="button__icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 20">
                    <path d="M1.88539 13.1513L2.61329 12.9705L1.88539 13.1513ZM1.88539 6.84875L1.1575 6.668H1.1575L1.88539 6.84875ZM20.1146 6.84876L20.8425 6.66801L20.1146 6.84876ZM20.1146 13.1512L20.8425 13.332V13.332L20.1146 13.1512ZM14.1156 18.659L13.9533 17.9267H13.9533L14.1156 18.659ZM7.88443 18.659L8.04668 17.9267L7.88443 18.659ZM7.88443 1.34105L7.72218 0.608809V0.608809L7.88443 1.34105ZM14.1156 1.34105L13.9533 2.07329L13.9533 2.07329L14.1156 1.34105ZM7.43055 18.5584L7.2683 19.2906L7.43055 18.5584ZM14.5694 18.5584L14.7317 19.2906H14.7317L14.5694 18.5584ZM14.5694 1.44162L14.7317 0.709379V0.709379L14.5694 1.44162ZM7.43056 1.44162L7.59281 2.17386H7.59281L7.43056 1.44162ZM3.73825 3.89015C3.40121 3.64936 2.93279 3.72738 2.692 4.06441C2.45121 4.40144 2.52923 4.86986 2.86626 5.11066L3.73825 3.89015ZM9.08247 8.63004L8.64648 9.24029H8.64648L9.08247 8.63004ZM12.9175 8.63004L13.3535 9.24029L12.9175 8.63004ZM19.1337 5.11066C19.4708 4.86986 19.5488 4.40144 19.308 4.06441C19.0672 3.72738 18.5988 3.64936 18.2618 3.89015L19.1337 5.11066ZM7.59281 2.17386L8.04668 2.07329L7.72218 0.608809L7.2683 0.70938L7.59281 2.17386ZM13.9533 2.07329L14.4072 2.17386L14.7317 0.709379L14.2778 0.60881L13.9533 2.07329ZM14.4072 17.8261L13.9533 17.9267L14.2778 19.3912L14.7317 19.2906L14.4072 17.8261ZM8.04668 17.9267L7.59281 17.8261L7.2683 19.2906L7.72218 19.3912L8.04668 17.9267ZM2.61329 12.9705C2.1289 11.0198 2.1289 8.9802 2.61329 7.02949L1.1575 6.668C0.614167 8.8561 0.614167 11.1439 1.1575 13.332L2.61329 12.9705ZM19.3867 7.0295C19.8711 8.9802 19.8711 11.0198 19.3867 12.9705L20.8425 13.332C21.3858 11.1439 21.3858 8.8561 20.8425 6.66801L19.3867 7.0295ZM13.9533 17.9267C12.008 18.3578 9.99198 18.3578 8.04668 17.9267L7.72218 19.3912C9.88122 19.8696 12.1188 19.8696 14.2778 19.3912L13.9533 17.9267ZM8.04668 2.07329C9.99198 1.64224 12.008 1.64224 13.9533 2.07329L14.2778 0.60881C12.1188 0.130397 9.88122 0.130397 7.72218 0.608809L8.04668 2.07329ZM7.59281 17.8261C5.14627 17.284 3.21736 15.4032 2.61329 12.9705L1.1575 13.332C1.89874 16.3171 4.26576 18.6253 7.2683 19.2906L7.59281 17.8261ZM14.7317 19.2906C17.7342 18.6253 20.1013 16.3171 20.8425 13.332L19.3867 12.9705C18.7826 15.4032 16.8537 17.284 14.4072 17.8261L14.7317 19.2906ZM14.4072 2.17386C16.8537 2.71598 18.7826 4.5968 19.3867 7.0295L20.8425 6.66801C20.1013 3.68288 17.7342 1.3747 14.7317 0.709379L14.4072 2.17386ZM7.2683 0.70938C4.26576 1.3747 1.89874 3.68288 1.1575 6.668L2.61329 7.02949C3.21736 4.59679 5.14627 2.71598 7.59281 2.17386L7.2683 0.70938ZM2.86626 5.11066L8.64648 9.24029L9.51847 8.01978L3.73825 3.89015L2.86626 5.11066ZM13.3535 9.24029L19.1337 5.11066L18.2618 3.89015L12.4815 8.01978L13.3535 9.24029ZM8.64648 9.24029C10.0543 10.2461 11.9456 10.2461 13.3535 9.24029L12.4815 8.01978C11.5953 8.65297 10.4047 8.65297 9.51847 8.01978L8.64648 9.24029Z"></path>
                </svg></span></span></a>
        </div>
        </div>
    </div>
    </div>
</div>
@include('frontend.includes.contact')
<div class="section section--space-md bg--main-red-5 p-case-study-detail__others">
    <div class="section__inner">
    <div class="container">
        <div class="section__main">
        <div class="section__header">
            <div class="section__header__main">
            <h2 class="text--xl">You might interest with this too</h2>
            </div>
        </div>
        <div class="section__body">
            <div class="grid gap--md">
            <div class="column--33">
                <article class="card card--info-inside">
                <div class="card__inner">
                    <div class="card__thumb">
                    <div class="card__thumb__image"><img src="{{ frontImages('card--thumbnail.png') }}" alt=""/></div>
                    </div>
                    <div class="card__info">
                    <div class="card__info__inner">
                        <div class="card__info__main">
                        <div class="card__category category"><span class="category__main">Retail Census</span></div>
                        <div class="card__title">
                            <h3 class="card__title__main text--lg"><a href="#">3 steps to streamline assortment and merchandising solutions</a></h3>
                        </div>
                        </div>
                    </div>
                    <div class="card__deco"><span class="card__deco__icon"></span></div>
                    </div>
                </div>
                </article>
            </div>
            <div class="column--33">
                <article class="card card--info-inside">
                <div class="card__inner">
                    <div class="card__thumb">
                    <div class="card__thumb__image"><img src="{{ frontImages('post--thumbnail--2.jpeg') }}" alt=""/></div>
                    </div>
                    <div class="card__info">
                    <div class="card__info__inner">
                        <div class="card__info__main">
                        <div class="card__category category"><span class="category__main">Event Evaluation</span></div>
                        <div class="card__title">
                            <h3 class="card__title__main text--lg"><a href="#">Stress Testing an Equity Investment Thesis on the Growth Strategy of a Global C2C Marketplace</a></h3>
                        </div>
                        </div>
                    </div>
                    <div class="card__deco"><span class="card__deco__icon"></span></div>
                    </div>
                </div>
                </article>
            </div>
            <div class="column--33">
                <article class="card card--info-inside">
                <div class="card__inner">
                    <div class="card__thumb">
                    <div class="card__thumb__image"><img src="{{ frontImages('post--thumbnail--3.jpeg') }}" alt=""/></div>
                    </div>
                    <div class="card__info">
                    <div class="card__info__inner">
                        <div class="card__info__main">
                        <div class="card__category category"><span class="category__main">Product Placement Test</span></div>
                        <div class="card__title">
                            <h3 class="card__title__main text--lg"><a href="#">Improving a New Product for Commercial Acceleration</a></h3>
                        </div>
                        </div>
                    </div>
                    <div class="card__deco"><span class="card__deco__icon"></span></div>
                    </div>
                </div>
                </article>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

@endsection
