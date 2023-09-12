<template>

    <li class="nav-item" :class="active ? 'active' : ''">
        <Link
            :href="href"
            class="nav-link"
        >
            <slot />
            <span class="sr-only" v-if="active">(current)</span>
        </Link>
    </li>

</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    props: {
        active: Boolean,
        href:String
    },
    components: {
        Link,
    },
};
</script>
