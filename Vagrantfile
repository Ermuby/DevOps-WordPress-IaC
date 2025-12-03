Vagrant.configure("2") do |config|

  config.vm.define "wp-server" do |server|
    server.vm.box = "ubuntu/bionic64"
    server.vm.hostname = "wordpress-server"

    server.vm.network "private_network", ip: "192.168.33.10"


    server.vm.provider "Virtualbox" do |vb|
    	vb.memory = "2048"
    	vb.cpus = 2
  end
    
    server.vm.provision "shell", path: "scripts/install_wordpress.sh"

  end
end