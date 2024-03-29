<?php
$logo        = st()->get_option( 'logo' , get_template_directory_uri() . '/img/logo-invert.png' );
$footer_menu = '<ul style="list-style: none; text-align: center;">
            <li style="display: inline-block;"><a href="#" style="color: #818181; text-decoration:none ;">' . __( "About us" , ST_TEXTDOMAIN ) . '</a> |</li>
            <li style="display: inline-block;"><a href="#" style="color: #818181 ; text-decoration:none ;">' . __( "Contact us" , ST_TEXTDOMAIN ) . '</a> |</li>
            <li style="display: inline-block;"><a href="#" style="color: #818181;text-decoration:none ;">' . __( "News" , ST_TEXTDOMAIN ) . '</a></li>
            </ul>';
$social_icon = '
            <a href="' . site_url() . '"><img class="alignnone wp-image-6292" src="' . get_template_directory_uri() . '/img/email/fa.png" alt="eb_face" width="35" height="35" /></a>
            <a style="margin: 5px;" href="' . site_url() . '"><img class="alignnone wp-image-6296" src="' . get_template_directory_uri() . '/img/email/tw.png" alt="'.TravelHelper::get_alt_image().'" width="35" height="35" /></a>
            <a style="margin: 5px;" href="' . site_url() . '"><img class="alignnone wp-image-6295" src="' . get_template_directory_uri() . '/img/email/gg.png" alt="'.TravelHelper::get_alt_image().'" width="35" height="35" /></a>
            ';
?>
<table id="booking-infomation" class="wrapper" width="90%" cellspacing="0" align="center" style="width:1000px">
    <tbody>
    <tr>
        <td style="padding: 20px 10px; background: #ED8323;" width="20%">
            <a href="<?php echo esc_url( site_url() ) ?>">
                <img class="alignnone wp-image-7442 size-full" src="<?php echo esc_url( $logo ) ?>" alt="logo"
                     width="110" height="40"/>
            </a>
        </td>
        <td style="background: #ed8323 none repeat scroll 0 0;color: #fff;font-size: 17px;padding: 21px 45px;text-align: right;"
            width="80%">
            <a href="#" style="color: #fff; padding-left: 12px; text-decoration:none ;">Hotel</a>
            <a href="#" style="color: #fff; padding-left: 20px; text-decoration:none ;">Rental</a>
            <a href="#" style="color: #fff; padding-left: 20px; text-decoration:none ;">Car</a>
            <a href="#" style="color: #fff; padding-left: 20px; text-decoration:none ;">Tour</a>
            <a href="#" style="color: #fff; padding-left: 20px; text-decoration:none ;">Activity</a>
        </td>
    </tr>
    </tbody>
</table>

<table id="" class="wrapper" style="padding-top: 70px; width: 1000px; color: #666;" width="90%" cellspacing="0" align="center">
    <tbody>
    <tr>
        <td style="padding-bottom: 20px; font-size: 20px;"><strong style="font-size: 30px;">Hello [st_email_order_customer_name]</strong>,</td>
    </tr>
    <tr>
        <td>
            <p>Booking ID: <strong>#[st_email_order_booking_id]</strong></p>
            <p>You have booked [st_email_order_service_name] <span class="m_5151859965653427686il">service</span> in our system on [st_email_order_create_date].</p>
            <p>Your <span class="m_5151859965653427686il">service</span> will be starting on [st_email_order_departure_date] ( <span class="m_5151859965653427686il">About</span> [st_email_order_countdown_day] day(s) )</p>
            <p>Please check your information.</p>
            <p>Thank you.</p>
        </td>
    </tr>
    <tr>
        <td style="padding-top: 30px; padding-bottom: 20px;" align="center"><hr style="color: #ddd;" /></td>
    </tr>
    <tr>
        <td style="" align="center"><?php echo balanceTags( $social_icon ) ?></td>
    </tr>
    <tr>
        <td style="padding-top: 20px;" align="center">

            <p>Booking, reviews and advices on hotels, resorts, flights, vacation rentals, travel packages, and lots
                more!</p>

            <?php echo balanceTags( $footer_menu ) ?>
        </td>
    </tr>
    </tbody>
</table>