<template>

    <div class="flex gap-1">
        <Link v-html="link.label" v-for="(link,index) in links" :key="index" class="py-2 px-4 rounded-md" :href="link.url"
              :class="{'bg-indigo-500 text-gray-300':link.active}"/>
    </div>
</template>

<script setup>
import {Link} from '@inertiajs/vue3';

const props = defineProps({
    links:Array
})

console.log(props.links);

</script>
