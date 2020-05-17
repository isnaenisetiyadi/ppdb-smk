export default {
    namespaces: true,
    state: {
        departments: [],
    },
    mutations: {
        insert: (state, payload) => {
            state.departments.push({
                id: payload.id,
                name: payload.name,
                description: payload.description,

            })
        },
        update: (state, payload) => {
            let idx = state.departments.indexOf(payload);
            state.departments.splice(idx, 1, {
                id: payload.id,
                name: payload.name,
                description: payload.description,
            });
        }
    },
    actions: {
        add: ({ state, commit }, payload) => {
            let departmentItem = state.departments.find(item => item.id === payload.id)
            if (!departmentItem) {
                commit('insert', payload)
            } else {
                commit('update', departmentItem)
            }
        }
    },
    getters: {
        departments: state => state.departments
    }
}