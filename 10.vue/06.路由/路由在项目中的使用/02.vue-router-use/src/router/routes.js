import Home from '../views/Home.vue'
import User from '../views/User.vue'
import UserList from '../views/UserList.vue'
import UserAdd from '../views/UserAdd.vue'

export default [{
  path: '/',
  redirect: "/Home",
},
  {
    path: '/Home',
    component: Home
  },
  {
    path: '/User',
    component: User,
    children: [
      {
        path:'',
        redirect:'list'
      },
      {
        path: 'list',
        component: UserList
      },
      {
        path: 'add',
        component: UserAdd
      }
    ]

  }
]
