<?php
/**
 * Plugin Name: Example Form Plugin
 *Author: Som Shrestha
 *
 */

function example_form_plugin(){
    $content = '';
    $content .= '   <form class="contact-form" method="post" action="https://som3669.github.io/themegrill/thank-you/">
                    <div class="form-row">
                        <div class="col form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="col form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Your Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="Send Message">
                    </div>
                </form>';



    return $content;
}
add_shortcode('example_form','example_form_plugin');


?>