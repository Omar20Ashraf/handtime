<template>
    <div>
        <div class="hero_area">
            <header class="header_section">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container">

                        <Link :href="route('home')" class="navbar-brand">
                            <span> HandTime </span>
                        </Link>

                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class=""> </span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <NavLink :href="route('home')" :active="$page.component == 'Home'">
                                    Home
                                </NavLink>

                                <NavLink :href="route('about')" :active="$page.component == 'About'">
                                    About
                                </NavLink>

                                <NavLink :href="route('products')" :active="$page.component == 'Product'">
                                    Products
                                </NavLink>

                                <NavLink :href="route('testimonial')" :active="$page.component == 'Testimonial'">
                                    Testimonial
                                </NavLink>

                                <NavLink :href="route('contact_us')" :active="$page.component == 'Contact'">
                                    Contact Us
                                </NavLink>
                            </ul>
                            <div class="user_optio_box">
                                <a href="#">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <slot />
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import NavLink from './NavLink.vue';

export default {
    components: {
        Link,
        NavLink,
    },
};
</script>
