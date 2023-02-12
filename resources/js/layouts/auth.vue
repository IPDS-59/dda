<script lang="ts" setup>
import { ref, onMounted } from 'vue';
import VNotification from '@/components/VNotification/index.vue';

const isLoading = ref(true);
const isContentLoaded = ref(false);

const changeLoadingState = () => {
    isLoading.value = !isLoading.value;
}

onMounted(() => {
    isContentLoaded.value = true;
});
</script>

<template>
    <VNotification />
    <main class="bg-white min-h-screen w-full">
        <div class="relative-flex">
            <Transition name="slide-fade" mode="out-in" :duration="1000">
                <div v-if="isContentLoaded" class="w-full flex-justify-center">
                    <slot :change-loading-state="changeLoadingState" />
                </div>
            </Transition>
        </div>
    </main>
</template>

<style scoped>
.slide-fade-enter-active {
    transition: all 0.3s ease;
}

.slide-fade-leave-active {
    transition: all 0.5s ease-out;
}

.slide-fade-enter-to,
.slide-leave {
    opacity: 1;
}

.slide-fade-enter-from

/* .slide-fade-leave-active below version 2.1.8 */
    {
    transform: translateY(-10px);
    opacity: 0;
}

.slide-fade-leave-to {
    transform: translateY(10px);
    opacity: 0;
}
</style>