@if (count($doctors) > 0)
@if (isset($doctors['data']))
@php
$data = $doctors['data'];
@endphp
@else
@php
$data = $doctors;
@endphp
@endif
@foreach ($data as $doctor)
<div class="jet-listing-grid__item jet-listing-dynamic-post-1278" data-id="{{ $doctor['id'] }}">		<div data-elementor-type="jet-listing-items" data-elementor-id="1119" class="elementor elementor-1119" data-elementor-post-type="jet-engine">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-627e83c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="627e83c" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-75e4803" data-id="75e4803" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-fbaa407 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fbaa407" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-117ee0d" data-id="117ee0d" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-46899f5 elementor-widget elementor-widget-image" data-id="46899f5" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<img decoding="async" src="{{ url($doctor['fullImage']) }}" title="" alt="" loading="lazy">															</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-284fe0f" data-id="284fe0f" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-d89cf96 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d89cf96" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-918188c" data-id="918188c" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-f6970b1 elementor-widget elementor-widget-jet-listing-dynamic-link" data-id="f6970b1" data-element_type="widget" data-widget_type="jet-listing-dynamic-link.default">
<div class="elementor-widget-container"><div class="jet-listing jet-listing-dynamic-link">
    <a href="../profesionales/tatiana/index7869.html?_post_id=1278" class="jet-listing-dynamic-link__link"><span class="jet-listing-dynamic-link__label">{{$doctor['name'] }}</span></a>
</div></div>
</div>
<div class="elementor-element elementor-element-74d2eed elementor-widget elementor-widget-heading" data-id="74d2eed" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<span class="elementor-heading-title elementor-size-default">{{ $doctor['hospital'][0]['address']}}</span>		</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1fdd4dc" data-id="1fdd4dc" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-a2cf6f9 elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="a2cf6f9" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container"><div class="elementor-button-wrapper">
    <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
    <span class="elementor-button-content-wrapper">
    <span class="elementor-button-icon elementor-align-icon-left">
    <i aria-hidden="true" class="{{ $doctor['is_fav'] == 'true' ? 'far fa-heart' : 'far fa-heart' }}"></i>
    </span>
    <span class="elementor-button-text"></span>
    </span>
    </a>
</div></div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-4ea335e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4ea335e" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bd712ea" data-id="bd712ea" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-cc9c6c7 elementor-widget elementor-widget-heading" data-id="cc9c6c7" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<span class="elementor-heading-title elementor-size-default">{{$doctor['treatment']['name'] }}</span>		</div>
</div>
<div class="elementor-element elementor-element-9a7c7dd elementor-widget__width-auto elementor--star-style-star_fontawesome elementor-widget elementor-widget-star-rating" data-id="9a7c7dd" data-element_type="widget" data-widget_type="star-rating.default">
<div class="elementor-widget-container">

<div class="elementor-star-rating__wrapper">
<div class="elementor-star-rating" title="4/5" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating"><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-empty"></i> <span itemprop="ratingValue" class="elementor-screen-only">4/5</span></div>		</div>
</div>
</div>
<div class="elementor-element elementor-element-8a5983b elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="8a5983b" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<span class="elementor-heading-title elementor-size-default">4.5</span>		</div>
</div>
<div class="elementor-element elementor-element-87022f2 elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="87022f2" data-element_type="widget" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
            <span class="elementor-icon-list-icon">
<i aria-hidden="true" class="fas fa-circle"></i>				</span>
        <span class="elementor-icon-list-text">{{ $doctor['review']}}{{__(' evaluaciones') }}</span>
</div>
</div>
<div class="elementor-element elementor-element-8c1d490 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="8c1d490" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<span class="elementor-heading-title elementor-size-default">Cédula (2332423)</span>		</div>
</div>
<div class="elementor-element elementor-element-617a90d elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="617a90d" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<p class="elementor-heading-title elementor-size-default">{{$doctor['desc'] }}</p></div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c1a6325" data-id="c1a6325" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-bf966e3 elementor-align-right elementor-mobile-align-justify elementor-widget elementor-widget-button" data-id="bf966e3" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper">
<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-push" href="{{ url('doctor-profile/'.$doctor['id'].'/'.Str::slug($doctor['name'])) }}">
<span class="elementor-button-content-wrapper">
<span class="elementor-button-text">Ver perfil profesional</span>
</span>
</a>
</div>
</div>
</div>
<div class="jet-popup-target elementor-element elementor-element-c93ebb6 elementor-align-right elementor-mobile-align-justify modalbtn elementor-widget elementor-widget-button jet-popup-attach-event-inited" data-jet-popup="{&quot;attached-popup&quot;:&quot;jet-popup-1605&quot;,&quot;trigger-type&quot;:&quot;click&quot;,&quot;trigger-custom-selector&quot;:&quot;&quot;}" data-id="c93ebb6" data-element_type="widget" data-btn="uno" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper">
<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow" href="#">
<span class="elementor-button-content-wrapper">
<span class="elementor-button-text">Programa una cita</span>
</span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</section>
</div>
</div>
@endforeach
@endif
