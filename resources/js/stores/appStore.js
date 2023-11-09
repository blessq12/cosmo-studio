import { defineStore, acceptHMRUpdate } from "pinia";

export const appStore = defineStore('app',{
    state:()=>({
        currentStudio: 'lenina'
    }),
    getters:{},
    actions:{}
})