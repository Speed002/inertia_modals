<!-- this is the modal component that will be called and used in every new modal created -->
<script setup>
import { TransitionRoot, TransitionChild, Dialog, DialogPanel } from '@headlessui/vue';
import { useModal } from 'momentum-modal';

const { show, close, redirect } = useModal()
</script>
<template>
    <TransitionRoot appear as="template" :show="show">
        <Dialog as="div" @close="close">
                <div class="fixed inset-0 bg-slate-800/75"></div>
                <div class="fixed inset-0 overflow-y-auto">
                    <div class="flex items-center justify-center text-center min-h-full">
                        <!-- @after-leave redirects the user to the baseRoute() after the modal has been closed -->
                        <TransitionChild
                            @after-leave="redirect"
                            as="template"
                            enter="duration-300 ease-out"
                            enter-from="opacity-0"
                            enter-to="opacity-100"
                            leave="duration-300 ease-out"
                            leave-from="opacity-100"
                            leave-to="opacity-0"
                        >
                            <DialogPanel class="bg-white p-12 text-left align-middle rounded-xl shadow-xl w-full max-w-md">
                                <slot :close="close"/>
                            </DialogPanel>
                        </TransitionChild>
                    </div>
                </div>
        </Dialog>
    </TransitionRoot>
</template>
