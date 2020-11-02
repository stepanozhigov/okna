<template>
    <transition name="modal">
        <div class="modal-mask">
            <div class="modal-container">
                <svg class="icon close" width="20px" height="20px" @click="$emit('close')">
                    <use xlink:href="#close"></use>
                </svg>
                <slot name="content"></slot>
            </div>
        </div>
    </transition>
</template>