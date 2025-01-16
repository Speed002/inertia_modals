<!-- from here is where we import the modal/container component that we created -->
<script setup>
import Modal from '@/Components/Modals/Modal.vue';
</script>
<template>
    <!-- the content inside this Modal wrapper is what will appear inside the main slot <slot> -->
    <Modal v-slot="{ close }">
        <div class="flex items-center">
            <p class="flex-grow">This is a modal bah</p>
            <button class="bg-gray-100 p-2 rounded-lg" v-on:click="close">close</button>
        </div>
    </Modal>
</template>
