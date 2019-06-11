export const state =()=>({
    categories:[]
   })
   
   export const getters={
       SET_CATEGORIES(state){
          return state.categories
       }
   }
   export const mutations={
       SET_CATEGORIES(state,categories){
           state.categories=categories
       }
   }
   
   export const actions={
       async nuxtServerInit({commit}){
           let responce=await this.$axios.$get('categories')
           commit('SET-CATEGORIES',response.data)
       }
   }
   