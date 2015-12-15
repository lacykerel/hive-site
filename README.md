# wordpress-vagrant-starter-kit
Base wordpress installation on vagrant


## Set up the local environment
### Prerequisites 
In order to set up and run this site locally you'll need the following:
- [Git](http://sourceforge.net/projects/git-osx-installer/)
- [VirtualBox](https://www.vagrantup.com/downloads.html)
- [Vagrant](https://www.vagrantup.com/downloads.html)

### Cloning the repository 
- [Ensure that your SSH key has been added to your GitHub.com account](https://help.github.com/articles/generating-ssh-keys)
- Open a terminal window
- Change to the directory that you would like to place the source code inside of (`cd ~/path/to/folder`)
- Clone this repository

### Starting Vagrant
- Change to the directory that you just cloned the source code into. 
- Insue the Vagrant startup command (`vagrant up`)
  - The first time you start vagrant, it will take a while to download the packages need to run the website and configure the environment. 
- After the startup process completes, you can visit the local website at the following urls: 
  - http://localhost:8888
