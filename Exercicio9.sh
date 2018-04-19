#!/bin/bash

echo "############################################################################"
echo "#                                                                          #"             
echo "# Nome do Script    : Contador de Arquivos                                 #"
echo "# Descrição         : Script que mapeia a rede                             #"                                          
echo "# Args              : ./Exercicio mapear                                   #"
echo "# Autor             : João Vitor Salvadori                                 #"   
echo "# Email             : joao_salvadori@hotmail.com                           #"                 
echo "# Data de alteração : 19/04                                                #"       
echo "#                                                                          #"                
echo "#                                                                          #"              
echo "############################################################################"


clear
echo "contador de arquivos"


LINHAS=$(cat ip.txt | wc -l)

for i in $(seq "1" "$LINHAS") 

do 

cat ip.txt | grep 192 |cut -d ' ' -f5 | head -n$i | tail -n1

cat log.txt | grep MAC | head -n$i | tail -n1
sleep 2

nmap -O $(sed -i '$i p' ip.txt)

ssmtp email < ip.txt >
ssmtp email < log.txt > 
done
