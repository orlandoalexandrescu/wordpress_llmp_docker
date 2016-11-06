Vagrant.configure(2) do |config|
#  config.vm.define "node" do |node|
#    node.vm.box = "ubuntu/trusty64"
#	node.vm.box_check_update = false
#	node.vm.synced_folder "../data", "/vagrant_data"
#    node.vm.network "private_network", ip: "192.168.0.10"
#	node.vm.hostname = 'hostname.example.com'
#	node.vm.provider "virtualbox" do |v|
#	   v.memory = 2048
#	   v.cpus = 2
#	end
#	node.vm.provision "shell", inline: <<-SHELL
#     apt-get update
#     apt-get upgrade -y
#   SHELL
#  end


  config.vm.define "controller" do |controller|
    controller.vm.box = "ubuntu/trusty64"
    controller.vm.box_check_update = false
    #	controller.vm.synced_folder "../data", "/vagrant_data"
    controller.vm.network "private_network", ip: "192.168.50.10"
    controller.vm.provision :hosts, :sync_hosts => true
	  controller.vm.hostname = 'controller.local'
	  controller.vm.provider "virtualbox" do |v|
	     v.memory = 256
	     v.cpus = 1
	     v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
       v.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
	end

  #below is a fix for no-tty problem
  controller.vm.provision "fix-no-tty", type: "shell" do |s|
       s.privileged = false
       s.inline = "sudo sed -i '/tty/!s/mesg n/tty -s \\&\\& mesg n/' /root/.profile"
  end

	controller.vm.provision "shell", inline: <<-SHELL
      apt-add-repository ppa:ansible/ansible
      apt-get update && apt-get upgrade -y && apt-get autoremove
      apt-get install software-properties-common ansible git zip unzip mc -y
      ssh-keygen -t rsa -q -N '' -f /home/vagrant/.ssh/id_rsa
      cp /home/vagrant/.ssh/id_rsa.pub /vagrant/ssh/id_rsa.pub
      cp /vagrant/ssh/config /home/vagrant/.ssh/config
      chown vagrant:vagrant /home/vagrant/.ssh/*
      SHELL
  end

  config.vm.define "webserver" do |webserver|
     webserver.vm.box = "ubuntu/trusty64"
     webserver.vm.box_check_update = false
     #	webserver.vm.synced_folder "../data", "/vagrant_data"
     webserver.vm.network "private_network", ip: "192.168.50.11"
     webserver.vm.provision :hosts, :sync_hosts => true
	   webserver.vm.hostname = 'webserver.local'
	   webserver.vm.provider "virtualbox" do |v|
	     v.memory = 256
	     v.cpus = 1
	     v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
       v.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
	     end

   #below is a fix for no-tty problem
   webserver.vm.provision "fix-no-tty", type: "shell" do |s|
       s.privileged = false
       s.inline = "sudo sed -i '/tty/!s/mesg n/tty -s \\&\\& mesg n/' /root/.profile"
       end

	 webserver.vm.provision "shell", inline: <<-SHELL
      apt-get update && apt-get upgrade -y && apt-get autoremove
      cat /vagrant/ssh/id_rsa.pub >> /home/vagrant/.ssh/authorized_keys
      apt-get install htop stress zip unzip mc -y

    SHELL

  end

  config.vm.define "dbserver" do |dbserver|
     dbserver.vm.box = "ubuntu/trusty64"
     dbserver.vm.box_check_update = false
     #	dbserver.vm.synced_folder "../data", "/vagrant_data"
     dbserver.vm.network "private_network", ip: "192.168.50.12"
     dbserver.vm.provision :hosts, :sync_hosts => true
	   dbserver.vm.hostname = 'dbserver.local'
	   dbserver.vm.provider "virtualbox" do |v|
	       v.memory = 1024
	       v.cpus = 1
	       v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
         v.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
       end

     #below is a fix for no-tty problem
     dbserver.vm.provision "fix-no-tty", type: "shell" do |s|
        s.privileged = false
        s.inline = "sudo sed -i '/tty/!s/mesg n/tty -s \\&\\& mesg n/' /root/.profile"
        end

	   dbserver.vm.provision "shell", inline: <<-SHELL
         apt-get update && apt-get upgrade -y && apt-get autoremove
         # apt-get upgrade -y
         apt-get install htop stress zip unzip mc -y
         cat /vagrant/ssh/id_rsa.pub >> /home/vagrant/.ssh/authorized_keys
     SHELL

    end

end
