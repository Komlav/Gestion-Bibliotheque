def permutation(l_alpha):
    n=input("entrer une chaine : \n")
    n=n.upper()
    print(n.upper())
    for i in n:
        if i in l_alpha:
            pos=l_alpha.index(i)+25
            n=n.replace(i,l_alpha[pos-23])
    return n

l_alpha=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"]

print(permutation(l_alpha))