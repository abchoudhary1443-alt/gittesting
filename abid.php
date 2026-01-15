    1  apt update
    2  apt list --upgradable
    3  ip r l 
    4  ip r l
    5  apt install openssh *
    6  apt install openssh-server 
    7  ufw status
    8  ufw enable 
    9  ufw allow 22
   10  ip r l
   11  exit
   12  apt install wireguard -y
   13  cd /home/hit-me/Downloads/
   14  ls
   15  systemctl status wg-quick.target 
   16  wg-quick up wg0-client-zotex2.conf 
   17  cp wg0-client-zotex2.conf  /etc/wireguard/
   18  wg-quick up wgo
   19  wg-quick up wg)
   20  wg-quick up wg0
   21  wg-quick up wg0-client-zotex2
   22  cd /etc/wireguard/
   23  ls
   24  wg-quick up wg0-client-zotex2
   25  systemctl enable wg-quick@wg0
   26  wg-quick up wg0-client-zotex2
   27  wg-quick up wg0
   28  ls
   29  cd -
   30  ls
   31  rm wg0-client-zotex2.conf 
   32  ls
   33  cp wg0-client-Abid.conf  /etc/wireguard/
   34  cd -
   35  ls
   36  rm wg0-client-zotex2.conf 
   37  wg-quick up wg0
   38  ls
   39  reboot 
   40  cd /root/.ssh/
   41  ssh-keygen -t ed25519 -c
   42  cat /etc/os-release 
   43  cd ~
   44  ll
   45  cd /home/hit-me/
   46  ls
   47  ll
   48  wg-quick up wg0
   49  wg-quick up wg0-client-Abid 
   50  ssh-keygen  -t ed25519 -c
   51  cd ~
   52  ll
   53  cd /root/
   54  ls
   55  ll
   56  mkdir -p ~/.ssh
   57  ls
   58  ll
   59  cd .ssh/
   60  ls
   61  ssh-keygen  -t ed25519 -c
   62  ls
   63  ssh-keygen  -t ed25519 -C
   64  chmod 700 /root/.ssh/
   65  ssh-keygen  -t ed25519 -c
   66  ls
   67  apt update 
   68  apt install openssh-client -y
   69  ssh-keygen -t ed25519 -c
   70  ssh-keygen -t rsa -b 4096 -c
   71  ls
   72  apt upgrade 
   73  apt install screen
   74  ping google.com
   75  ssh-keygen -t ed25519 -c
   76  top
   77  ssh-keygen -t ed25519 -c
   78  sudo ssh-keygen -t ed25519 -C "abchoudhary1443@example.com"
   79  cd /root/.ssh/
   80  ll
   81  cat id_ed25519.pub
   82  apt install screen
   83  screen -S abid
   84  screen -ls
   85  apt upgrade
   86  su -
   87  reboot 
   88  history 
   89  wg-quick up wg0
   90  wg-quick up wg0-client-Abid 
   91  history |grep wi
   92  apt install wireguard -y
   93  apt upgrade 
   94  reboot 
   95  wg-quick up wg0-client-Abid 
   96  wg-quick up wg0
   97  history |grep wg
   98  ssh -p 36581 root@88.99.95.167
   99  wg show
  100  wg-quick down wg0
  101  systemctl enable wg-quick@wg
  102  wg-quick down wg0
  103  wg-quick down wg
  104  ls -l /etc/wireguard/
  105  ls
  106  cat /etc/os-release 
  107  nmcli connection show
  108  systemctl status wg-quick@wg.service 
  109  systemctl status wg-quick@wg0.service 
  110  systemctl start wg-quick@wg0
  111  history 
  112  curl -fsSL https://pkgs.netbird.io/install.sh | sh
  113  sudo apt-get update
  114  sudo apt-get install ca-certificates curl gnupg -y
  115  curl -sSL https://pkgs.netbird.io/debian/public.key | sudo gpg --dearmor --output /usr/share/keyrings/netbird-archive-keyring.gpg
  116  echo 'deb [signed-by=/usr/share/keyrings/netbird-archive-keyring.gpg] https://pkgs.netbird.io/debian stable main' | sudo tee /etc/apt/sources.list.d/netbird.list
  117  ip r l
  118  reboot 
  119  ls
  120  cd /
  121  ls
  122  cd home/
  123  ll
  124  cd hit-me/
  125  ls
  126  cd Downloads/
  127  apt install ./anydesk_7.1.0-1_amd64.deb 
  128  apt --fix-broken install 
  129  anydesk
  130  exit
  131  ls
  132  df -h
  133  apt install docker.io 
  134  ip r l
  135  whoami
  136  exit
  137  for pkg in docker.io docker-doc docker-compose docker-compose-v2 podman-docker containerd runc; do sudo apt-get remove $pkg; done
  138  dcoker
  139  # Add Docker's official GPG key:
  140  sudo apt-get update
  141  sudo apt-get install ca-certificates curl
  142  sudo install -m 0755 -d /etc/apt/keyrings
  143  sudo curl -fsSL https://download.docker.com/linux/ubuntu/gpg -o /etc/apt/keyrings/docker.asc
  144  sudo chmod a+r /etc/apt/keyrings/docker.asc
  145  # Add the repository to Apt sources:
  146  echo   "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.asc] https://download.docker.com/linux/ubuntu \
  147    $(. /etc/os-release && echo "${UBUNTU_CODENAME:-$VERSION_CODENAME}") stable" |   sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
  148  sudo apt-get update
  149  reboot 
  150  ls
  151  wget -O - https://apt.releases.hashicorp.com/gpg | sudo gpg --dearmor -o /usr/share/keyrings/hashicorp-archive-keyring.gpg
  152  echo "deb [arch=$(dpkg --print-architecture) signed-by=/usr/share/keyrings/hashicorp-archive-keyring.gpg] https://apt.releases.hashicorp.com $(grep -oP '(?<=UBUNTU_CODENAME=).*' /etc/os-release || lsb_release -cs) main" | sudo tee /etc/apt/sources.list.d/hashicorp.list
  153  sudo apt update && sudo apt install terraform
  154  terraform 
  155  cd /home/
  156  cd /
  157  mkdir Terraform
  158  cd Terraform/
  159  main.tf
  160  nano main.tf
  161  terraform init
  162  ls
  163  ll
  164  cat .terraform.lock.hcl 
  165  ls
  166  ll
  167  cd .terraform/
  168  ls
  169  cd providers/registry.terraform.io/hashicorp/
  170  ls
  171  ll
  172  cd aws/
  173  ls
  174  cd 6.19.0/
  175  ls
  176  cd linux_amd64/
  177  ls
  178  cat terraform-provider-aws_v6.19.0_x5 
  179  pwd
  180  ls
  181  cd ..
  182  ls
  183  cd ../../../
  184  ls
  185  cd hashicorp/
  186  ls
  187  cd aws/6.19.0/linux_amd64/
  188  cat LICENSE.txt 
  189  cd -
  190  cd /Terraform/
  191  ls
  192  nano aws.tf 
  193  ls
  194  mv aws.tf createinstance.tf
  195  ls
  196  nano createinstance.tf 
  197  terraform apply "first.out"
  198  terraform apply 
  199  nano createinstance.tf 
  200  nano test.tf
  201  cat createinstance.tf 
  202  nano  createinstance.tf 
  203  terraform init
  204  l
  205  mv main.tf main.tfbk
  206  terraform init
  207  terraform apply "test.out"
  208  terraform init
  209  terraform plan -out=test.out
  210  terraform apply "test.out"
  211  nano  createinstance.tf 
  212  terraform apply "test.out"
  213  nano  createinstance.tf 
  214  terraform init
  215  terraform plan -out=test.out
  216  terraform apply "test.out"
  217  nano  createinstance.tf 
  218  terraform init
  219  terraform plan -out=test.out
  220  terraform apply "test.out"
  221  ls
  222  cat createinstance.tf 
  223  terraform apply "test.out"
  224  nano createinstance.tf 
  225  aws configure
  226  nano createinstance.tf 
  227  terraform plan -out test.out
  228  terraform apply "test.out"
  229  nano createinstance.tf 
  230  rm -f test.out
  231  terraform plan -out test.out
  232  terraform apply "test.out"
  233  cd /Terraform/
  234  ll
  235  terraform init
  236  terraform plan -out test.out
  237  terraform apply "test.out"
  238  cat createinstance.tf 
  239  vim createinstance.tf 
  240  terraform init
  241  terraform apply "test.out"
  242  terraform plan -out test.out
  243  terraform apply "test.out"
  244  aws configer
  245  apt install awscli
  246  aws configer
  247  aws configer ec2
  248  aws configure
  249  cat createinstance.tf 
  250  vim createinstance.tf 
  251  terraform init
  252  terraform plan -out test.out
  253  vim createinstance.tf 
  254  terraform init
  255  terraform plan -out test.out
  256  vim createinstance.tf 
  257  terraform plan -out test.out
  258  terraform apply "test.out"
  259  terraform init
  260  terraform plan -out test.out
  261  terraform apply "test.out"
  262  terraform destory
  263  terraform -help
  264  terraform destroy
  265  terraform init
  266  terraform plan -out test.out
  267  terraform apply "test.out"
  268  vim createinstance.tf 
  269  terraform init
  270  terraform plan -out test.out
  271  terraform apply "test.out"
  272  vim createinstance.tf 
  273  terraform init
  274  terraform plan -out test.out
  275  terraform apply "test.out"
  276  vim createinstance.tf 
  277  terraform init
  278  terraform plan -out test.out
  279  terraform apply "test.out"
  280  vim createinstance.tf 
  281  terraform init
  282  terraform plan -out test.out
  283  terraform apply "test.out"
  284  vim createinstance.tf 
  285  terraform plan -out test.out
  286  terraform apply "test.out"
  287  vim createinstance.tf 
  288  terraform init
  289  terraform plan -out test.out
  290  terraform apply "test.out"
  291  vim createinstance.tf 
  292  terraform init
  293  terraform plan -out test.out
  294  vim createinstance.tf 
  295  terraform plan -out test.out
  296  vim createinstance.tf 
  297  terraform plan -out test.out
  298  cd .terraform/providers/registry.terraform.io/hashicorp/aws/
  299  ls
  300  cd 6.19.0/linux_amd64/
  301  ls
  302  cd ..
  303  ls
  304  cd ..
  305  ls
  306  ll
  307  cd ../../../
  308  ll
  309  cd ..
  310  ll
  311  cd ../
  312  ll
  313  cat createinstance.tf
  314  mv createinstance.tf createinstance.tfbk
  315  vim newtesting.tf
  316  terraform init
  317  terraform plan -out test.out
  318  vim newtesting.tf 
  319  terraform plan -out test.out
  320  aws sts get-caller-identity
  321  vim newtesting.tf 
  322  terraform init
  323  terraform plan -out test.out
  324  terraform -help
  325  terraform workspace 
  326  terraform destroy
  327  terraform show
  328  terraform console
  329  vim newtesting.tf 
  330  terraform init
  331  terraform plan -out test.out
  332  terraform apply  -out test.out
  333  terraform apply test.out
  334  apt install tree
  335  ls
  336  tree
  337  tree -a
  338  cat .terraform.lock.hcl 
  339  cd /Terraform/
  340  ls
  341  mv newtesting.tf newtesting.tfbk
  342  cat newtesting.tfbk 
  343  vim multyinstance.tf
  344  terraform init
  345  terraform plan --out test2.out
  346  terraform apply  test2.out
  347  terraform destroy
  348  ll
  349  date
  350  cat terraform.tfstate
  351  cat terraform.tfstate.backup 
  352  cd /Terraform/multipelblock/
  353  vim first.tf
  354  terraform plan
  355  terraform apply
  356  df -h
  357  ll
  358  vim secend.tf
  359  terraform plan
  360  vim secend.tf
  361  terraform plan
  362  cd ..
  363  ls
  364  mkdir inputvariable
  365  cd inputvariable/
  366  vim first.tf
  367  terraform plan
  368  vim first.tf 
  369  terraform plan
  370  su -
  371  reboot 
  372  vim /etc/hostname 
  373  su -
  374  apt install git 
  375  git --version
  376  git config --global user.name "Dev"
  377  git config --global user.email "abid.pakrasool@gmail.com"
  378  mkdir git-practice
  379  cd git-practice
  380  pwd
  381  mv /root/git-practice/ /home/
  382  ls
  383  cd ..
  384  ls
  385  mv git-practice/ /home/
  386  ls
  387  cd /
  388  ls
  389  mv /home/git-practice/ /
  390  ls
  391  cd git-practice/
  392  ls
  393  https://github.com/umair-nazir-work/easybuy.git
  394  gh repo clone umair-nazir-work/easybuy
  395  apt install gh
  396  gh repo clone umair-nazir-work/easybuy
  397  git@github.com:umair-nazir-work/easybuy.git
  398  ls
  399  gh repo clone umair-nazir-work/easybuy
  400  git config --global --edit 
  401  git init
  402  git status
  403  touch index.html
  404  touch admin.php
  405  git status
  406  git add -A
  407  git status
  408  git commit -m "added testing perpes"
  409  git satus 
  410  git status
  411  tree
  412  history >> index.html 
  413  git status
  414  cd /git-practice/
  415  ls
  416  cat admin.php 
  417  git checkout -f
  418  cat admin.php 
  419  vim admin.php 
  420  git status
  421  git add
  422  git add >
  423  git add .
  424  git status
  425  cat admin.php 
  426  git checkout -f
  427  git status
  428  cat admin.php 
  429  git giff
  430  git diff
  431  git diff --staged
  432  git commit -m "added new content" 
  433  git diff --staged
  434  git log -p -2
  435  git status
  436  git status -s
  437  history >> abid.php
