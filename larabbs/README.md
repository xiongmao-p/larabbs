在解压目录中 lc-homestead-12.0.0-20220219 运行以下命令导入 Box：
> vagrant box add metadata.json \
> cd ~ \
> git clone https://gitee.com/summerblue/homestead.git Homestead

更改Homestead.yaml配置文件
```yaml
---
ip: "192.168.56.56"
memory: 2048
cpus: 2
provider: virtualbox

authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    - map: D:/study/source/Code
      to: /home/vagrant/code
    #  type: "nfs"

sites:
    - map: homestead.test
      to: /home/vagrant/code/public
    - map: larabbs.test # <--- 这里
      to: /home/vagrant/code/larabbs/public # <--- 这里

databases:
    - homestead
    - larabbs # <--- 这里

features:
    - mysql: true
    - mariadb: false
    - postgresql: false
    - ohmyzsh: false
    - webdriver: false

services:
    - enabled:
          - "mysql"
#    - disabled:
#        - "postgresql@11-main"

#ports:
#    - send: 33060 # MySQL/MariaDB
#      to: 3306
#    - send: 4040
#      to: 4040
#    - send: 54320 # PostgreSQL
#      to: 5432
#    - send: 8025 # Mailhog
#      to: 8025
#    - send: 9600
#      to: 9600
#    - send: 27017
#      to: 27017

```

###[虚拟机设置](https://learnku.com/docs/laravel-development-environment/9.x/development-environment-windows/12323#a3c561)

---


重启机器： cd ~/Homestead && vagrant provision && vagrant reload


### 第一步 php artisan ui bootstrap

### 第二步 yarn install

### 第三步 npm run watch-poll
