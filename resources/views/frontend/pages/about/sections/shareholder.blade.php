<?php
/**
 * About ShareHolder view //dummy
 */
?>
@extends('frontend.pages.about.main')
@section('content-about')
<div class="main-container">
    <section class="flex-container">
    @include('frontend.pages.about.sidebar')
        <section class="main--content small">
            <section class="about">
                <div class="about-wrapper">
                  <div class="title-shareholder">
                    <h3 class="title--main">Shareholder Composition</h3><span class="date text--midle-range">31 December 2020</span>
                  </div>
                  <div class="stakeholder_mobile-scroll">
                    <div class="shareholder-table">
                      <div class="shareholder-table_head">
                        <div class="shareholder-table_box first-row no-border-bottom no-border-right"></div>
                        <div class="shareholder-table_box no-border-bottom no-border-right"><span class="text--medium">Shareholders</span></div>
                        <div class="shareholder-table_box no-border-bottom no-border-right"><span class="text--medium">Share</span></div>
                        <div class="shareholder-table_box no-border-bottom no-border-right"><span class="text--medium">Percentage of Ownership</span></div>
                      </div>
                      <div class="shareholder-table_body">
                        <div class="shareholder-table_row">
                          <div class="shareholder-table_box first-row blue-background"><span>Preferred Shareholders (A Series)</span></div>
                          <div class="shareholder-table_box"></div>
                          <div class="shareholder-table_box"></div>
                          <div class="shareholder-table_box no-border-right"></div>
                        </div>
                        <div class="shareholder-table_row">
                          <div class="shareholder-table_box first-row gray-background"><span><b>Public</b></span></div>
                          <div class="shareholder-table_box gray-light-background"> <span>253</span></div>
                          <div class="shareholder-table_box gray-light-background"> <span>145,550</span></div>
                          <div class="shareholder-table_box no-border-right gray-light-background"> <span>1%</span></div>
                        </div>
                        <div class="shareholder-table_row">
                          <div class="shareholder-table_box first-row gray-background"><span>Taisho Pharmaceutical Indonesia</span></div>
                          <div class="shareholder-table_box gray-light-background"> <span>1</span></div>
                          <div class="shareholder-table_box gray-light-background"> <span>62.210</span></div>
                          <div class="shareholder-table_box no-border-right gray-light-background"> <span>1%</span></div>
                        </div>
                        <div class="shareholder-table_row">
                          <div class="shareholder-table_box first-row gray-background"><span>Taisho Pharmaceutical Co., Ltd.</span></div>
                          <div class="shareholder-table_box gray-light-background"> <span>1</span></div>
                          <div class="shareholder-table_box gray-light-background"> <span>764,420</span></div>
                          <div class="shareholder-table_box no-border-right gray-light-background"> <span>7%</span></div>
                        </div>
                        <div class="shareholder-table_row">
                          <div class="shareholder-table_box first-row blue-background"><span>Common shares (B Series)</span></div>
                          <div class="shareholder-table_box"></div>
                          <div class="shareholder-table_box"></div>
                          <div class="shareholder-table_box no-border-right"></div>
                        </div>
                        <div class="shareholder-table_row">
                          <div class="shareholder-table_box first-row gray-background"><span>Taisho Pharmaceutical Co., Ltd.</span></div>
                          <div class="shareholder-table_box gray-light-background"> <span>1</span></div>
                          <div class="shareholder-table_box gray-light-background"> <span>9,268,000</span></div>
                          <div class="shareholder-table_box no-border-right gray-light-background"> <span>91%</span></div>
                        </div>
                        <div class="shareholder-table_row">
                          <div class="shareholder-table_box first-row blue-background"><span>Total</span></div>
                          <div class="shareholder-table_box gray-light-background"> <span>254</span></div>
                          <div class="shareholder-table_box gray-light-background"> <span>10,240,000</span></div>
                          <div class="shareholder-table_box no-border-right gray-light-background"> <span>100%</span></div>
                        </div>
                        <div class="shareholder-table_row">
                          <div class="shareholder-table_box first-row blue-background"><span>Treasury Shares</span></div>
                          <div class="shareholder-table_box gray-light-background"> <span>1</span></div>
                          <div class="shareholder-table_box gray-light-background"> <span>(62,210)</span></div>
                          <div class="shareholder-table_box no-border-right gray-light-background"><span>-1%</span></div>
                        </div>
                        <div class="shareholder-table_row">
                          <div class="shareholder-table_box first-row no-border-bottom blue-background"><span>Total Shares Outstanding</span></div>
                          <div class="shareholder-table_box no-border-bottom"> </div>
                          <div class="shareholder-table_box no-border-bottom gray-light-background"> <span>10,177,790</span></div>
                          <div class="shareholder-table_box no-border-bottom no-border-right gray-light-background"> <span>99%</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
        </section>
    </section>
</div>
@endsection
