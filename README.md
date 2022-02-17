# [BookDrive](http://stark-lake-68051.herokuapp.com/)

A web application, where those who have the course books might donate, & those who need them will order. Now we would create a channel to pick up the books from donor & also deliver it to the needful.

## Installation

Open project in Visual Code or use below command to open in installed editor

```bash
  $ code .
```

Install additional dependency using terminal

```bash
  $ composer upgrade
```

After successfully finish above command use below command to run app

```bash
  $ php artisan serve
```

Run app locally in browser

```bash
  http://127.0.0.1:8000/
```

## MongoDB
[![MongoDB](https://lh3.googleusercontent.com/R7dw6yMDqzWxQgiqslkxTnP-3e1wNFCLXNhMaSvMY-6Sutf3saejIW0FDzK3cUU0ItbD-c-ma52shXCE4WmjRARETTorCbDhggJANVlaxxLyxW3M1fNpkMvj_1Uq5a0SDsHEVy88_NHdidpRVXt1dX--y_bsvKy0nS8l2p0F5hbZlb9F1nQjvn4-PDszR3wjLhij3S6FZVl-T4lv5gMsRHE17SHuNBuMP82Gveg35BBY84bxqbAjjGog7sNXJ2BQe1CZaAWKfCT2Ly3uBGfcEUWNiGFBAk3jhvJW86AeEpI2vbuZ5XJnE3odY2q-jtZw3dARmMZbzNOARkSeg8pxQga0eJbV7K81TS-KETXfIXq3nIAx0up7Nplhg7A9Gy5HMiUlheo8Y0DPoOVFQ54XGC5hmR3z053jKRPAdhY5Opd-QzFa8n3hwizOQThh3Nx9--w-A5MbWgk8mZeknapncXEFGp5Tdj_9PWmUD4E9auio40B8qtSobqnAqPJjDayreAoGMVdcPDElPZk5YQTZTjPZBvMxVyFW7uOhqY-PuAj4THFILk9GHCmAiqebziSUnBAhaqV4PDFRHUl5kkQorTM0mP6RIzVhZOQvtcg6Gb0_X6QmR5NF76FVK16WKaUJviv1GUi5ZE35k_YU4VBnAtijCp6ekg1OGU0Z8TWqqCAmHwFrtC8WXiqe2VA2uXjNUUPbhOK4g7LhrpmgcziocaU=w433-h116-no?authuser=0)](https://account.mongodb.com/account/login?_ga=2.27186813.1330840700.1645023003-106929829.1643112359)

- [Documentation](https://docs.mongodb.com/)
- [Sign Up | Login](https://account.mongodb.com/account/login?_ga=2.27186813.1330840700.1645023003-106929829.1643112359)
- After create cluster connect laravel app using mongodb credentials
- run blew commands to migrate documents

  ```bash
    $ php artisan migrate
  ```
- Check the status of above command

  ```bash
    $ php artisan migrate:status
  ```
- [Laravel database](https://laravel.com/docs/7.x/database)

## Host App on [Heroku](https://dashboard.heroku.com/)

- [Heroku](https://dashboard.heroku.com/) Refrence
- [Sign Up | Login](https://id.heroku.com/login)
- Download [Heroku CLI](https://devcenter.heroku.com/articles/heroku-cli#install-the-heroku-cli) in you local PC
- After successfully install login in [Heroku](https://dashboard.heroku.com/) using CLI
- Open Command Line (CMD) and run below command to login

  ```bash
    $ heroku login
  ```
- After login create app on heroku and push all local code to the heroku app

  ```bash
    $ heroku create app (name of app)
    $ git init
    $ git add .
    $ git commit -m "commit message" 
    $ git push heroku master
  ```
- Check the dashboard on [Heroku Dashboard](https://dashboard.heroku.com/apps)
- To run this project, you will need to add the following environment variables to your .env file
  - `APP_KEY`
  - `APP_DEBUG`
  - `APP_NAME`

- Select your app and update your env by click to [Settings](https://dashboard.heroku.com/apps/stark-lake-68051/settings) -> Config Vars
- Finally, Open your app
- [Open app](http://stark-lake-68051.herokuapp.com/)

[![app](https://lh3.googleusercontent.com/-GQ2_vpBYiivBqfIz39fzLG0uQhKwCCbwio_EBpfC2vrXgl5mIRfNtbqXwXpnv6YLAZ7VgvOfmJUaTcYC0SX1u09AmllcgIL9FWH8gYXhWJyGv5e3AYiqCQ1tYY8QMY0scE6d642BOcuG2Pjk-eXjvM79DGZBBKpKfgXgrMWmAllr5ivySxHF0aRs37qiQw9HccT9ACFkap2XZmqWF-peJVTv_aKDHjgF4cpVk8fSn86dvBf2vrdiR7_WduyvqyrXdjwRL9C2Oqi-X8e_WxsGGqZLNDol9oS5DvopRd8kVoSbWgrvEjoJZ0Lhp_KSilP4raIT9WpCvlKcRt8v96dCGt-WoUPTqF1X22JER10bbsJWQ8_60qFI8Q7rZnDzTq8HUU1nKNnhrcJqfg2cEPLLPp51FwIbrdUBV_5Y_K_9hL97Okrzk6yi-d5PBoip-xF0SuMlVNro7bnZj9bgPpzWpuIaNjHvy12symB72OZEVAeiuEjdv8Wop8qy3hhOXf2iUc1UhMBcK6UhyV3IVKlqfcVO4_5FaPCXiCK_28vZh9eN-pyR5_t3LJ0bq4yTRLQAk5CfCMmfLkm8pXgVfFOVWH4UhDYsHtG-Iad_3V7ouDdbNEHbW7AvaYz1ha2pTt1-Zu1iSlzVbAsMwP1xgA0QNfGab35NsDBb_0oPFgMXbaXo0lU5Dtu_hapk5Ft_y30AlYo7BZqY1vp2E9OOoaKMOc=w1190-h665-no?authuser=0)](http://stark-lake-68051.herokuapp.com/)

## 🛠 Skills
Javascript, HTML, CSS, Bootstrap, PHP, Laravel, MongoDB(Database)

## Contributors
- [RAKESH](https://github.com/RkayBhaker)
- [Shuaib](https://github.com/shuaib71)
- [Pooja Hatankar](https://github.com/poojahatankar15)
- [Sarwan Kumar](https://github.com/shrawan632)
