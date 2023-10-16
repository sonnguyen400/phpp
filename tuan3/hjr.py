def maxValue(m,k):
    if (m==0):
        return -1
    else:
        maxV = -2
        if m>k:
            so_bi_lon_nhat_co_the_boc = k
        else:
            so_bi_lon_nhat_co_the_boc = m
        for i in range(1,so_bi_lon_nhat_co_the_boc + 1):
            x = minValue(m-i,k)
            if x > maxV:
                maxV=x
        return maxV

def minValue(m,k):
    if m==0:
        return 1
    else:
        minV = 2
        if m>k:
            so_bi_lon_nhat_co_the_boc = k
        else:
            so_bi_lon_nhat_co_the_boc = m
        for i in range(1,so_bi_lon_nhat_co_the_boc + 1):
            x = maxValue(m-i,k)
            if (x<minV):
                minV=x
        return minV

def main():
    n= int(input('Số viên bi lúc đầu: '))
    k = int(input('Số viên bi tối đa mỗi lần bốc: '))
    t = int(input('Ai là người đi trước (0 - máy / 1 - bạn) : ' ))
    while (n>0):
        if (t==0):
            max = minValue(n-1,k)
            may_boc = 1;

            if n>k:
                so_bi_lon_nhat_co_the_boc = k
            else:
                so_bi_lon_nhat_co_the_boc = n

            for i in range(2,so_bi_lon_nhat_co_the_boc + 1):
                temp = minValue(n-i,k)
                if max < temp:
                    may_boc=i;
                    max = temp;
                    break;
            print("Máy bốc ", may_boc);
            n=n-may_boc
            print("Số viên còn lại: ", n);
        if (t==1):
            ban_boc = int(input('Ban bốc bao nhiêu viên: '))
            while (ban_boc < 0 or ban_boc > k):
                ban_boc = int(input('Số viên không hợp lệ, mời bạn bốc lại: '))
            n= n - ban_boc
            print("Số viên còn lại: ", n)
        t = 1-t; # chuyển sang người kia đi
    if (t==0):
        print("Máy thua, bạn thắng, xin chúc mừng!")
    else:
        print("Bạn thua!")

# Press the green button in the gutter to run the script.
if __name__ == '__main__':
    main()