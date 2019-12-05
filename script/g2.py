### Part 0: Import
#**Import the various libraries**

import os
import numpy as np
import pandas as pd
import math

### Part 1: Read Files
#**Raw data:**
#**(1) cycle 1 & cycle 35**
#**(2) genotype**
#**(3) risk factor**
#**(4) disease risk**

################################
# Read files: cycle 1 & cycle 35
################################

G2_num = str(input("Please the G2 sample number(ex: G2190712-01): "))

cycle1_dic = '../sample_data/' + "/"+ G2_num[2:8]+ "/"+ G2_num +'c-cycle 1.xls'
cycle35_dic = '../sample_data/' + "/"+ G2_num[2:8]+ "/"+ G2_num + 'c-cycle 35.xls'


cycle1 = pd.read_excel(open(cycle1_dic, 'rb'),
              sheet_name='Multicomponent Data')


cycle35 = pd.read_excel(open(cycle35_dic, 'rb'),
              sheet_name='Multicomponent Data')


cycle1 = pd.DataFrame(cycle1)
cycle1 = cycle1.loc[46:]
cycle1.columns = ['Well', 'Cycle', 'ROX', 'VIC', 'FAM']
#cycle1.head()

cycle35 = pd.DataFrame(cycle35)
cycle35 = cycle35.loc[46:]
cycle35.columns = ['Well', 'Cycle', 'ROX', 'VIC', 'FAM']
#cycle35.head()

print('\n' '(1) '+ G2_num + ' read the cycle 1 & 35 excel file.\n')

##########################
# Read files: genotype.csv
##########################


genotype = pd.read_csv('../raw/genotype.csv')

#print(genotype.head())




#############################
# Read files: risk_factor.csv
#############################


risk_factor = pd.read_csv('../raw/risk_factor.csv', float_precision='round_trip')

#risk_factor.head()





##############################
# Read files: disease_risk.csv
##############################

disease_risk = pd.read_csv('../raw/disease_risk.csv')





##########################
# Read files: nutrient.csv
##########################


nutrient = pd.read_excel(open('../raw/nutrient.xlsx', 'rb'),
              sheet_name='nutrient')


nutrient_SC = pd.read_excel(open('../raw/nutrient_SC.xlsx', 'rb'),
              sheet_name='nutrient_SC')



###############################
# Read files: nutrient_gene.csv
###############################

nutrient_gene = pd.read_excel(open('../raw/nutrient_gene.xlsx', 'rb'),
              sheet_name='nutrient_gene')




###########################
# Read files: lifestyle.csv
###########################


lifestyle = pd.read_excel(open('../raw/lifestyle.xlsx', 'rb'),
              sheet_name='lifestyle')

#lifestyle.head()

lifestyle_SC = pd.read_excel(open('../raw/lifestyle_SC.xlsx', 'rb'),
              sheet_name='lifestyle_SC')



#############################
# Read files: risk_factor.csv
#############################


risk_factor = pd.read_csv('../raw/risk_factor.csv', encoding = 'utf-8')



########################
# Read files: membership
########################

member = pd.read_excel(open('../raw/來案暨出貨明細表-基因檢測.xlsx', 'rb'),
              sheet_name='來案暨出貨明細表-基因檢測(201904起')



member[(member[['檢體編號']] == G2_num).all(1)]


# member number
member_number = member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,10]

# report date
date = str(member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,9])[0:4] + '/' + str(member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,9])[5:7] + '/' +str(member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,9])[8:10]

# weight
weight = member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,22]

# height
height = member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,21]

# gender
gender = member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,13]

# paper or electronic
report_type = member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,16]

# language
language = member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,17]


# clinic

if member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,6] == 0:
    clinic = "健樂士診所"

#elif math.isnan(member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,6]):
#    clinic = "健樂士診所"

elif member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,6] == '':
    clinic = "健樂士診所"

elif member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,6] != '':
    clinic = member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,6]



# clinic SC

if member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,6] == 0:
    clinic_SC = "健乐士诊所"

#elif math.isnan(member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,6]):
#    clinic_SC = "健乐士诊所"

elif member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,6] == '':
    clinic_SC = "健乐士诊所"

elif member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,6] != '':
    clinic_SC = member[(member[['檢體編號']] == G2_num).all(1)].iloc[0,6]


membership = {'data':['sample ID', 'clinic', 'member ID', 'date', 'weight', 'height', 'gender', 'report_type', 'language'], 'info':[G2_num, clinic, member_number, date, weight, height, gender, report_type, language]}

membership_SC = {'data':['sample ID', 'clinic', 'member ID', 'date', 'weight', 'height', 'gender', 'report_type', 'language'], 'info':[G2_num, clinic_SC, member_number, date, weight, height, gender, report_type, language]}

# Create DataFrame
membership = pd.DataFrame(membership)
membership

# write csv
outname = G2_num + '_membership.csv'

outdir = '../result/' + G2_num[2:8] + '/' + G2_num + '/'
if not os.path.exists(outdir):
    os.makedirs(outdir)

fullname = os.path.join(outdir, outname)

membership.to_csv(fullname , encoding='utf-8')

print(G2_num + ' finish output ' + fullname + '\n')

# membership_SC

membership_SC = pd.DataFrame(membership_SC)
membership_SC

# write csv
outname = G2_num + '_membership_SC.csv'

outdir = '../result/' + G2_num[2:8] + '/' + G2_num + '/'
if not os.path.exists(outdir):
    os.makedirs(outdir)

fullname = os.path.join(outdir, outname)

membership_SC.to_csv(fullname , encoding='utf-8')


print(G2_num + ' finish output ' + fullname + '\n')

print("")
print("---------------------------")
print('sample ID: ', G2_num)
print('clinic: ', clinic)
print('member ID: ', member_number)
print('report date: ', date)
print('weight: ', weight)
print('height: ', height)
print('gender: ', gender)
print('report_type: ', report_type)
print('language: ', language)
print("---------------------------")
print("")

membership


#############################
#1. Genotype: delta VIC & FAM
#############################



#################################
# calculate delta_vic & delta_fam

delta_vic = list(cycle35['VIC'] - cycle1['VIC'])
#print(delta_vic)

delta_fam = list(cycle35['FAM'] - cycle1['FAM'])
#print(delta_fam)

delta = pd.DataFrame(list(zip(delta_vic, delta_fam)),
                    columns=['delta_vic','delta_fam'])



delta.head()

print('(2) ' + G2_num + ' get vic and fam value.\n')


#############################
# get the signal of delta_vic

vic_signal = []

for cell in delta_vic:
    if cell >= 500:
        vic_signal.append(1)

    else:
        vic_signal.append(0)

#print(vic_signal)


print('(3) ' + G2_num + ' finish delta_vic calculation.\n')


#############################
# get the signal of delta_fam

fam_signal = []

for cell in delta_fam:
    if cell >= 500:
        fam_signal.append(1)

    else:
        fam_signal.append(0)

#print(fam_signal)


print('(4) ' + G2_num + ' finish delta_fam calculation.\n')


########################################
# get the error of delta_vic & delta_fam

signal = []

for i in range(0,len(vic_signal)):
    signal.append(vic_signal[i] + fam_signal[i])

signal_row = [298, 300, 331, 353, 354, 355, 356, 359, 361, 374, 378, 382, 383]

for row in signal_row:

    signal[row] = 2

#print(signal)


error = 0
for cell in signal:
    if cell != 2:
        error += 1


quality = ''

if error >= 40:
    quality = "The quality doesn't pass, we should redo the experiment."

elif error < 40:
    quality = "The Quality Pass"


print('##################################################')
print('Error number:', error)
print('Quality:', quality)
print('##################################################\n')



######################################
# get the value: delta_vic / delta_fam

value = []

for i in range(len(delta_vic )):

    if vic_signal[i] == 1 and fam_signal[i] == 1:

        value.append(delta_vic[i] / delta_fam[i])

    elif vic_signal[i] != 1 and fam_signal[i] == 1:

        value.append(1 / delta_fam[i])

    elif vic_signal[i] == 1 and fam_signal[i] != 1:

        value.append(delta_vic[i] / 1)

    else:
        value.append(1)

#print(value)

print('(5) ' + G2_num + ' finish delta vic and fam ratio calculate.\n')

#########################################
# get the genotype: delta_vic / delta_fam



client_genotype = []


for i in range(len(value)-2):
                  #standard1
    if value[i] > genotype.iloc[i, 9]:

        #allele1
        client_genotype.append(genotype.iloc[i, 6])
                    #standard2
    elif value[i] < genotype.iloc[i, 10]:

        #allele3
        client_genotype.append(genotype.iloc[i, 8])

    else:

        #allele2
        client_genotype.append(genotype.iloc[i, 7])



#print('genotype', client_genotype)

print('(6) ' + G2_num + ' finish matching genotype.\n')



##########################################
# get the risk factor of specific genotype
##########################################


disease_risk.head()


# match the genotype to disease_risk
rs_genetic_risk = []

for rs_disease in disease_risk['rs_number']:

    for j in range(len(genotype['rs number'])):

        if rs_disease == genotype['rs number'][j]:

            rs_genetic_risk.append(client_genotype[j])




disease_genotype = pd.DataFrame(list(zip(disease_risk['Disease_code'], disease_risk['rs_number'], rs_genetic_risk)), columns=['Disease_code', 'rs_number', 'genotype'])

#df.to_csv('./raw/rs_genetic_risk.csv')


#print(len(disease_risk['Disease_code']), len(disease_risk['rs_number']), len(rs_genetic_risk) )




##########################################
# get the risk factor of specific genotype
##########################################


disease_risk.head()


# match the genotype to disease_risk

rs_genetic_risk = []

for rs_disease in disease_risk['rs_number']:

    for j in range(len(genotype['rs number'])):

        if rs_disease == genotype['rs number'][j]:

            rs_genetic_risk.append(client_genotype[j])




# get the encode of each allele risk

risk_encode = []

for i in range(len(disease_risk['Disease_code'])):

    encode = (disease_risk['Disease_code'][i] + disease_risk['rs_number'][i] + rs_genetic_risk[i])

    risk_encode.append(encode)





disease_genotype = pd.DataFrame(list(zip(disease_risk['Disease_code'], disease_risk['rs_number'], rs_genetic_risk, risk_encode)), columns=['Disease_code', 'rs_number', 'genotype', 'risk_encode'])

disease_genotype.head()



#df.to_csv('./raw/disease_genotype.csv')

#print(len(risk_encode))



risk = []

for encode in risk_encode:

    if encode in list(risk_factor['Allele_risk']):

        a = risk_factor.loc[risk_factor['Allele_risk'] == encode].index[0]

        risk.append(risk_factor.iloc[a,1])

    elif encode not in list(risk_factor['Allele_risk']):

        risk.append(1)



risk = list(map(float, risk))

# set risk to 6 decimal
risk9 = []

for i in range(len(risk)):
    risk9.append(format(float(risk[i]), '.9f'))



gene_risk = pd.DataFrame(list(zip(disease_risk['Disease_code'], disease_risk['rs_number'], rs_genetic_risk, risk_encode, risk9)), columns=['Disease_code', 'rs_number', 'genotype', 'risk_encode', 'risk'])

# add apoe in the last row

d15_g1_encode = disease_risk['Disease_code'][93] + disease_risk['rs_number'][93] + disease_risk['rs_number'][94] + rs_genetic_risk[93] + rs_genetic_risk[94]
d15_g1 = float(risk_factor.iloc[risk_factor.loc[risk_factor['Allele_risk'] == d15_g1_encode].index[0], 1])
d15_apoe = [{'Disease_code':'D15','rs_number': disease_risk['rs_number'][93] + disease_risk['rs_number'][94],'genotype': rs_genetic_risk[93] + rs_genetic_risk[94],'risk_encode': disease_risk['Disease_code'][93] + disease_risk['rs_number'][93] + disease_risk['rs_number'][94] + rs_genetic_risk[93] + rs_genetic_risk[94],'risk': float(risk_factor.iloc[risk_factor.loc[risk_factor['Allele_risk'] == d15_g1_encode].index[0], 1])}]

gene_risk.loc[len(gene_risk.index)]=list(d15_apoe[0].values())

#gene_risk.append(d15_apoe, ignore_index=True, sort=False)


# gene_risk write to csv file

outname = G2_num + '_gene_risk.csv'

outdir = '../result/' + G2_num[2:8] + '/' + G2_num + '/'
if not os.path.exists(outdir):
    os.mkdir(outdir)

fullname = os.path.join(outdir, outname)

gene_risk.to_csv(fullname)

print('(7) ' + G2_num + ' finish output ' + fullname + '\n')

gene_risk.head(500)


##############
# Disease Risk
##############

#risk = pd.to_numeric(risk, downcast='float')


###########
# D1: 肥胖症

d1 = gene_risk.iloc[0:12]


d1_g1 = max(risk[0], risk[3], risk[5], risk[7], risk[8])
d1_g2 = risk[1]
d1_g3 = max(risk[2], risk[4], risk[11])
d1_g4 = risk[6]
d1_g5 = risk[9]


d1_ratio_temp = (d1_g1*d1_g2*d1_g3*d1_g4*d1_g5)*1.2

if d1_ratio_temp >= 1:

    d1_ratio = d1_ratio_temp

elif d1_ratio_temp < 1:

    d1_ratio = 1.00



d1_ratio = format(d1_ratio, '.2f')



##############
# D2: 高尿酸血症

d2 = gene_risk.iloc[12:20]


d2_g1 = max(risk[12], risk[13], risk[19])
d2_g2 = max(risk[14], risk[15])
d2_g3 = risk[16]
d2_g4 = max(risk[17], risk[18])



d2_ratio_temp = (d2_g1*d2_g2*d2_g3*d2_g4)

if d2_ratio_temp >= 1:

    d2_ratio = d2_ratio_temp

elif d2_ratio_temp < 1:

    d2_ratio = 1.00



d2_ratio = format(d2_ratio, '.2f')






################
# D3: 第二型糖尿病

d3 = gene_risk.iloc[20:30]


d3_g1 = max(risk[20], risk[21], risk[25], risk[29])
d3_g2 = max(risk[22], risk[23])
d3_g3 = risk[24]
d3_g4 = risk[26]
d3_g5 = risk[27]
d3_g6 = risk[28]



d3_ratio_temp = (d3_g1*d3_g2*d3_g3*d3_g4*d3_g5*d3_g6) * 1.2

if d3_ratio_temp >= 1:

    d3_ratio = d3_ratio_temp

elif d3_ratio_temp < 1:

    d3_ratio = 1.00



d3_ratio = format(d3_ratio, '.2f')



################
# D4: 冠狀動脈疾病

d4 = gene_risk.iloc[20:30]


d4_g1 = risk[30]
d4_g2 = max(risk[31], risk[32], risk[33])
d4_g3 = max(risk[34], risk[37], risk[38], risk[39])
d4_g4 = max(risk[35], risk[36])



d4_ratio_temp = (d4_g1*d4_g2*d4_g3*d4_g4)

if d4_ratio_temp >= 1:

    d4_ratio = d4_ratio_temp

elif d4_ratio_temp < 1:

    d4_ratio = 1.00



d4_ratio = format(d4_ratio, '.2f')




#############
# D5: 心房顫動

d5 = gene_risk.iloc[40:44]


d5_g1 = risk[40]
d5_g2 = risk[41]
d5_g3 = risk[42]
d5_g4 = risk[43]



d5_ratio_temp = (d5_g1*d5_g2*d5_g3*d5_g4)*1.2

if d5_ratio_temp >= 1:

    d5_ratio = d5_ratio_temp

elif d5_ratio_temp < 1:

    d5_ratio = 1.00


d5_ratio = format(d5_ratio, '.2f')




###########
# D6: 腦中風

d6 = gene_risk.iloc[40:44]


d6_g1 = risk[44]
d6_g2 = risk[45]
d6_g3 = risk[46]
d6_g4 = risk[47]
d6_g5 = risk[48]


d6_ratio_temp = (d6_g1*d6_g2*d6_g3*d6_g4*d6_g5)*1.2

if d6_ratio_temp >= 1:

    d6_ratio = d6_ratio_temp

elif d6_ratio_temp < 1:

    d6_ratio = 1.00



d6_ratio = format(d6_ratio, '.2f')




###########
# D7: 高血壓

d7 = gene_risk.iloc[49:58]


d7_g1 = max(risk[49], risk[50], risk[56])
d7_g2 = risk[51]
d7_g3 = risk[52]
d7_g4 = max(risk[53], risk[54])
d7_g5 = risk[55]
d7_g6 = risk[57]


d7_ratio_temp = (d7_g1*d7_g2*d7_g3*d7_g4*d7_g5*d7_g6)

if d7_ratio_temp >= 1:

    d7_ratio = d7_ratio_temp

elif d7_ratio_temp < 1:

    d7_ratio = 1.00



d7_ratio = format(d7_ratio, '.2f')






###########
# D8: 高血脂

d8 = gene_risk.iloc[58:68]


d8_g1 = max(risk[58], risk[61], risk[63], risk[66])
d8_g2 = risk[59]
d8_g3 = risk[60]
d8_g4 = risk[62]
d8_g5 = risk[64]
d8_g6 = risk[65]
d8_g7 = risk[67]


d8_ratio_temp = (d8_g1*d8_g2*d8_g3*d8_g4*d8_g5*d8_g6*d8_g7)


if d8_ratio_temp > 10:

    d8_ratio = 9.92

elif d8_ratio_temp >= 1:

    d8_ratio = d8_ratio_temp

elif d8_ratio_temp < 1:

    d8_ratio = 1.00


d8_ratio = format(d8_ratio, '.2f')



#################
# D10: 僵直性脊椎炎

d10 = gene_risk.iloc[68:72]


d10_g1 = risk[68]
d10_g2 = risk[69]
d10_g3 = risk[70]
d10_g4 = risk[71]


d10_ratio_temp = (d10_g1*d10_g2*d10_g3*d10_g4)

if d10_ratio_temp >= 1:

    d10_ratio = d10_ratio_temp

elif d10_ratio_temp < 1:

    d10_ratio = 1.00



d10_ratio = format(d10_ratio, '.2f')



###################
# D11: 類風濕性關節炎

d11 = gene_risk.iloc[72:80]


d11_g1 = max(risk[72], risk[73])
d11_g2 = max(risk[74], risk[75])
d11_g3 = max(risk[76], risk[77])
d11_g4 = risk[78]
d11_g5 = risk[79]


d11_ratio_temp = (d11_g1*d11_g2*d11_g3*d11_g4*d11_g5)*0.95


if d11_ratio_temp > 10:

    d11_ratio = 9.85

elif d11_ratio_temp >= 1:

    d11_ratio = d11_ratio_temp

elif d11_ratio_temp < 1:

    d11_ratio = 1.00



d11_ratio = format(d11_ratio, '.2f')





###############
# D12: 紅斑性狼瘡


d12 = gene_risk.iloc[80:88]


d12_g1 = risk[81]
d12_g2 = risk[82]
d12_g3 = max(risk[80], risk[83], risk[84], risk[85], risk[86], risk[87])


d12_ratio_temp = (d12_g1*d12_g2*d12_g3)

if d12_ratio_temp >= 1:

    d12_ratio = d12_ratio_temp

elif d12_ratio_temp < 1:

    d12_ratio = 1.00




d12_ratio = format(d12_ratio, '.2f')




######################
# D13: 自體免疫甲狀腺疾病


d13 = gene_risk.iloc[88:93]


d13_g1 = max(risk[88], risk[91], risk[92])
d13_g2 = max(risk[89], risk[90])



d13_ratio_temp = (d13_g1*d13_g2)

if d13_ratio_temp >= 1:

    d13_ratio = d13_ratio_temp

elif d13_ratio_temp < 1:

    d13_ratio = 1.00



d13_ratio = format(d13_ratio, '.2f')




###############
# D15: 阿茲海默症


d15 = gene_risk.iloc[93:99]

d15_g1_encode = disease_risk['Disease_code'][93] + disease_risk['rs_number'][93] + disease_risk['rs_number'][94] + rs_genetic_risk[93] + rs_genetic_risk[94]
d15_g1 = float(risk_factor.iloc[risk_factor.loc[risk_factor['Allele_risk'] == d15_g1_encode].index[0], 1])
d15_g2 = risk[95]
d15_g3 = risk[96]
d15_g4 = risk[97]
d15_g5 = risk[98]


d15_ratio_temp = (d15_g1*d15_g2*d15_g3*d15_g4*d15_g5)

if d15_ratio_temp >= 1:

    d15_ratio = d15_ratio_temp

elif d15_ratio_temp < 1:

    d15_ratio = 1.00



d15_ratio = format(d15_ratio, '.2f')





###############
# D16: 帕金森氏症


d16 = gene_risk.iloc[99:108]


d16_g1 = max(risk[99], risk[105], risk[106], risk[107])
d16_g2 = risk[100]
d16_g3 = risk[101]
d16_g4 = risk[102]
d16_g5 = max(risk[103], risk[104])


d16_ratio_temp = (d16_g1*d16_g2*d16_g3*d16_g4*d16_g5)

if d16_ratio_temp >= 1:

    d16_ratio = d16_ratio_temp

elif d16_ratio_temp < 1:

    d16_ratio = 1.00


d16_ratio = format(d16_ratio, '.2f')




##############
# D17: 骨質疏鬆


d17 = gene_risk.iloc[108:115]


d17_g1 = risk[112]
d17_g2 = risk[113]
d17_g3 = risk[114]
d17_g4 = risk[108]
d17_g5 = risk[109]
d17_g6 = risk[110]
d17_g7 = risk[111]


d17_ratio_temp = (d17_g1*d17_g2*d17_g3*d17_g4*d17_g5*d17_g6*d17_g7)*1.1

if d17_ratio_temp >= 1:

    d17_ratio = d17_ratio_temp

elif d17_ratio_temp < 1:

    d17_ratio = 1.00



d17_ratio = format(d17_ratio, '.2f')





#################
# D18: 退化性關節炎


d18 = gene_risk.iloc[108:115]


d18_g1 = max(risk[115], risk[121], risk[122], risk[123])
d18_g2 = risk[116]
d18_g3 = risk[117]
d18_g4 = max(risk[118], risk[120])
d18_g5 = risk[119]


d18_ratio_temp = (d18_g1*d18_g2*d18_g3*d18_g4*d18_g5)

if d18_ratio_temp >= 1:

    d18_ratio = d18_ratio_temp

elif d18_ratio_temp < 1:

    d18_ratio = 1.00




d18_ratio = format(d18_ratio, '.2f')



############
# D19: 白內障


d19 = gene_risk.iloc[124:128]


d19_g1 = risk[124]
d19_g2 = risk[125]
d19_g3 = risk[126]
d19_g4 = risk[127]



d19_ratio_temp = (d19_g1*d19_g2*d19_g3*d19_g4)

if d19_ratio_temp >= 1:

    d19_ratio = d19_ratio_temp

elif d19_ratio_temp < 1:

    d19_ratio = 1.00


d19_ratio = format(d19_ratio, '.2f')



################
# D20: 黃斑部病變


d20 = gene_risk.iloc[128:135]


d20_g1 = max(risk[128], risk[133], risk[131])
d20_g2 = max(risk[129], risk[130])
d20_g3 = risk[132]
d20_g4 = risk[134]



d20_ratio_temp = (d20_g1*d20_g2*d20_g3*d20_g4)

if d20_ratio_temp >= 1:

    d20_ratio = d20_ratio_temp

elif d20_ratio_temp < 1:

    d20_ratio = 1.00


d20_ratio = format(d20_ratio, '.2f')



############
# D21: 青光眼


d21 = gene_risk.iloc[128:135]


d21_g1 = max(risk[135], risk[138], risk[140])
d21_g2 = risk[136]
d21_g3 = risk[137]
d21_g4 = risk[139]



d21_ratio_temp = (d21_g1*d21_g2*d21_g3*d21_g4)

if d21_ratio_temp >= 1:

    d21_ratio = d21_ratio_temp

elif d21_ratio_temp < 1:

    d21_ratio = 1.00



d21_ratio = format(d21_ratio, '.2f')



###################
# D22: 慢性阻塞性肺病


d22 = gene_risk.iloc[141:146]


d22_g1 = risk[141]
d22_g2 = risk[142]
d22_g3 = risk[143]
d22_g4 = risk[144]
d22_g5 = risk[145]



d22_ratio_temp = (d22_g1*d22_g2*d22_g3*d22_g4*d22_g5)

if d22_ratio_temp >= 1:

    d22_ratio = d22_ratio_temp

elif d22_ratio_temp < 1:

    d22_ratio = 1.00


d22_ratio = format(d22_ratio, '.2f')



############
# D23: 肝硬化


d23 = gene_risk.iloc[146:155]


d23_g1 = max(risk[146], risk[147], risk[149], risk[153])
d23_g2 = risk[148]
d23_g3 = risk[150]
d23_g4 = risk[151]
d23_g5 = risk[152]
d23_g6 = risk[154]


d23_ratio_temp = (d23_g1*d23_g2*d23_g3*d23_g4*d23_g5*d23_g6)

if d23_ratio_temp >= 1:

    d23_ratio = d23_ratio_temp

elif d23_ratio_temp < 1:

    d23_ratio = 1.00


d23_ratio = format(d23_ratio, '.2f')




############
# D24: 脂肪肝


d24 = gene_risk.iloc[155:164]


d24_g1 = max(risk[155], risk[162])
d24_g2 = max(risk[156], risk[157])
d24_g3 = risk[158]
d24_g4 = max(risk[159], risk[161])
d24_g5 = risk[163]
d24_g6 = risk[160]


d24_ratio_temp = (d24_g1*d24_g2*d24_g3*d24_g4*d24_g5*d24_g6)

if d24_ratio_temp >= 1:

    d24_ratio = d24_ratio_temp

elif d24_ratio_temp < 1:

    d24_ratio = 1.00


d24_ratio = format(d24_ratio, '.2f')



############
# D25: 膽結石


d25 = gene_risk.iloc[164:173]


d25_g1 = risk[164]
d25_g2 = risk[165]
d25_g3 = risk[166]
d25_g4 = max(risk[167], risk[168], risk[169], risk[170])
d25_g5 = risk[171]
d25_g6 = risk[172]


d25_ratio_temp = (d25_g1*d25_g2*d25_g3*d25_g4*d25_g5*d25_g6)

if d25_ratio_temp >= 1:

    d25_ratio = d25_ratio_temp

elif d25_ratio_temp < 1:

    d25_ratio = 1.00


d25_ratio = format(d25_ratio, '.2f')



############
# D26: 腎結石


d26 = gene_risk.iloc[173:179]


d26_g1 = risk[173]
d26_g2 = max(risk[174], risk[175])
d26_g3 = risk[176]
d26_g4 = risk[177]
d26_g5 = risk[178]


d26_ratio_temp = (d26_g1*d26_g2*d26_g3*d26_g4*d26_g5)

if d26_ratio_temp >= 1:

    d26_ratio = d26_ratio_temp

elif d26_ratio_temp < 1:

    d26_ratio = 1.00


d26_ratio = format(d26_ratio, '.2f')




##########################
# D27: 消化性潰瘍、胃食道逆流


d27 = gene_risk.iloc[179:185]


d27_g1 = risk[179]
d27_g2 = risk[180]
d27_g3 = max(risk[181], risk[182])
d27_g4 = risk[183]
d27_g5 = risk[184]


d27_ratio_temp = (d27_g1*d27_g2*d27_g3*d27_g4*d27_g5)

if d27_ratio_temp >= 1:

    d27_ratio = d27_ratio_temp

elif d27_ratio_temp < 1:

    d27_ratio = 1.00


d27_ratio = format(d27_ratio, '.2f')




################
# D28: 大腸息肉症


d28 = gene_risk.iloc[185:192]


d28_g1 = risk[185]
d28_g2 = risk[186]
d28_g3 = risk[187]
d28_g4 = risk[188]
d28_g5 = max(risk[189], risk[190])
d28_g6 = risk[191]


d28_ratio_temp = (d28_g1*d28_g2*d28_g3*d28_g4*d28_g5)


if d28_ratio_temp > 10:

    d28_ratio = 9.99

elif d28_ratio_temp >= 1:

    d28_ratio = d28_ratio_temp

elif d28_ratio_temp < 1:

    d28_ratio = 1.00


d28_ratio = format(d28_ratio, '.2f')



###################
# D32: 子宮內膜異位症


d32 = gene_risk.iloc[192:201]


d32_g1 = risk[192]
d32_g2 = max(risk[193], risk[194], risk[195])
d32_g3 = risk[196]
d32_g4 = risk[197]
d32_g5 = risk[198]
d32_g6 = risk[199]
d32_g7 = risk[200]


d32_ratio_temp = (d32_g1*d32_g2*d32_g3*d32_g4*d32_g5*d32_g6*d32_g7)

if d32_ratio_temp >= 1:

    d32_ratio = d32_ratio_temp

elif d32_ratio_temp < 1:

    d32_ratio = 1.00


d32_ratio = format(d32_ratio, '.2f')



##############
# D33: 子宮肌瘤


d33 = gene_risk.iloc[201:207]


d33_g1 = max(risk[201], risk[206])
d33_g2 = risk[202]
d33_g3 = risk[203]
d33_g4 = max(risk[204], risk[205])


d33_ratio_temp = (d33_g1*d33_g2*d33_g3*d33_g4)

if d33_ratio_temp >= 1:

    d33_ratio = d33_ratio_temp

elif d33_ratio_temp < 1:

    d33_ratio = 1.00


d33_ratio = format(d33_ratio, '.2f')



####################
# D34: 多囊性卵巢症候群


d34 = gene_risk.iloc[207:217]


d34_g1 = max(risk[207], risk[208], risk[209], risk[215], risk[216])
d34_g2 = risk[210]
d34_g3 = risk[211]
d34_g4 = risk[212]
d34_g5 = max(risk[213], risk[214])


d34_ratio_temp = (d34_g1*d34_g2*d34_g3*d34_g4*d34_g5)

if d34_ratio_temp >= 1:

    d34_ratio = d34_ratio_temp

elif d34_ratio_temp < 1:

    d34_ratio = 1.00


d34_ratio = format(d34_ratio, '.2f')



############
# D35: 憂鬱症


d35 = gene_risk.iloc[217:224]


d35_g1 = risk[217]
d35_g2 = risk[218]
d35_g3 = max(risk[219], risk[220])
d35_g4 = risk[221]
d35_g5 = risk[222]
d35_g6 = risk[223]


d35_ratio_temp = (d35_g1*d35_g2*d35_g3*d35_g4*d35_g5*d35_g6)

if d35_ratio_temp >= 1:

    d35_ratio = d35_ratio_temp

elif d35_ratio_temp < 1:

    d35_ratio = 1.00


d35_ratio = format(d35_ratio, '.2f')



############
# D36: 躁鬱症


d36 = gene_risk.iloc[224:236]


d36_g1 = max(risk[224], risk[225], risk[229], risk[230], risk[233])
d36_g2 = max(risk[226], risk[227], risk[228], risk[232])
d36_g3 = risk[231]
d36_g4 = max(risk[234], risk[235])


d36_ratio_temp = (d36_g1*d36_g2*d36_g3*d36_g4)

if d36_ratio_temp >= 1:

    d36_ratio = d36_ratio_temp

elif d36_ratio_temp < 1:

    d36_ratio = 1.00


d36_ratio = format(d36_ratio, '.2f')



################
# D37: 思覺失調症


d37 = gene_risk.iloc[236:243]


d37_g1 = risk[236]
d37_g2 = risk[237]
d37_g3 = risk[238]
d37_g4 = risk[239]
d37_g5 = risk[240]
d37_g6 = risk[241]
d37_g7 = risk[242]


d37_ratio_temp = (d37_g1*d37_g2*d37_g3*d37_g4*d37_g5*d37_g6*d37_g7)

if d37_ratio_temp >= 1:

    d37_ratio = d37_ratio_temp

elif d37_ratio_temp < 1:

    d37_ratio = 1.00


d37_ratio = format(d37_ratio, '.2f')



###########
# D40: 氣喘


d40 = gene_risk.iloc[243:250]


d40_g1 = max(risk[243], risk[245])
d40_g2 = max(risk[244], risk[246], risk[247])
d40_g3 = risk[248]
d40_g4 = risk[249]


d40_ratio_temp = (d40_g1*d40_g2*d40_g3*d40_g4)*1.1

if d40_ratio_temp >= 1:

    d40_ratio = d40_ratio_temp

elif d40_ratio_temp < 1:

    d40_ratio = 1.00

d40_ratio = format(d40_ratio, '.2f')




###############
# D41: 攝護腺肥大


d41 = gene_risk.iloc[250:256]


d41_g1 = risk[250]
d41_g2 = risk[251]
d41_g3 = risk[252]
d41_g4 = max(risk[253], risk[254])
d41_g5 = risk[255]


d41_ratio_temp = (d41_g1*d41_g2*d41_g3*d41_g4*d41_g5)

if d41_ratio_temp >= 1:

    d41_ratio = d41_ratio_temp

elif d41_ratio_temp < 1:

    d41_ratio = 1.00


d41_ratio = format(d41_ratio, '.2f')



#############
# D45: 膀胱癌


d45 = gene_risk.iloc[256:266]


d45_g1 = max(risk[256], risk[257], risk[259], risk[265])
d45_g2 = risk[258]
d45_g3 = risk[260]
d45_g4 = risk[261]
d45_g5 = risk[262]
d45_g6 = risk[263]
d45_g7 = risk[264]

d45_ratio_temp = (d45_g1*d45_g2*d45_g3*d45_g4*d45_g5*d45_g6*d45_g7)

if d45_ratio_temp >= 1:

    d45_ratio = d45_ratio_temp

elif d45_ratio_temp < 1:

    d45_ratio = 1.00


d45_ratio = format(d45_ratio, '.2f')



#############
# D46: 大腸癌


d46 = gene_risk.iloc[266:279]


d46_g1 = risk[266]
d46_g2 = max(risk[267], risk[270], risk[272], risk[273], risk[274], risk[275])
d46_g3 = risk[268]
d46_g4 = risk[269]
d46_g5 = risk[271]
d46_g6 = risk[276]
d46_g7 = risk[277]
d46_g8 = risk[278]


d46_ratio_temp = (d46_g1*d46_g2*d46_g3*d46_g4*d46_g5*d46_g6*d46_g7*d46_g8)*1.1

if d46_ratio_temp >= 1:

    d46_ratio = d46_ratio_temp

elif d46_ratio_temp < 1:

    d46_ratio = 1.00


d46_ratio = format(d46_ratio, '.2f')


#############
# D47: 食道癌


d47 = gene_risk.iloc[279:290]


d47_g1 = max(risk[279], risk[282], risk[283], risk[285], risk[286])
d47_g2 = risk[280]
d47_g3 = risk[284]
d47_g4 = risk[287]
d47_g5 = risk[288]
d47_g6 = risk[289]
d47_g7 = risk[281]


d47_ratio_temp = (d47_g1*d47_g2*d47_g3*d47_g4*d47_g5*d47_g6*d47_g7)

if d47_ratio_temp >= 1:

    d47_ratio = d47_ratio_temp

elif d47_ratio_temp < 1:

    d47_ratio = 1.00


d47_ratio = format(d47_ratio, '.2f')




###########
# D48: 肺癌


d48 = gene_risk.iloc[290:306]


d48_g1 = max(risk[290], risk[296])
d48_g2 = max(risk[291], risk[294])
d48_g3 = risk[292]
d48_g4 = risk[293]
d48_g5 = risk[295]
d48_g6 = max(risk[297], risk[300])
d48_g7 = max(risk[298], risk[299])
d48_g8 = risk[302]
d48_g9 = risk[303]
d48_g10 = risk[304]
d48_g11 = risk[305]
d48_g12 = risk[301]


d48_ratio_temp = (d48_g1*d48_g2*d48_g3*d48_g4*d48_g5*d48_g6*d48_g7*d48_g8*d48_g9*d48_g10*d48_g11*d48_g12)

if d48_ratio_temp >= 1:

    d48_ratio = d48_ratio_temp

elif d48_ratio_temp < 1:

    d48_ratio = 1.00


d48_ratio = format(d48_ratio, '.2f')



#############
# D49: 鼻咽癌


d49 = gene_risk.iloc[306:317]


d49_g1 = max(risk[306], risk[307], risk[308], risk[310], risk[313], risk[314])
d49_g2 = risk[309]
d49_g3 = risk[311]
d49_g4 = risk[312]
d49_g5 = risk[315]
d49_g6 = risk[316]


d49_ratio_temp = (d49_g1*d49_g2*d49_g3*d49_g4*d49_g5*d49_g6)

if d49_ratio_temp >= 1:

    d49_ratio = d49_ratio_temp

elif d49_ratio_temp < 1:

    d49_ratio = 1.00


d49_ratio = format(d49_ratio, '.2f')




###########
# D50: 胃癌

d50 = gene_risk.iloc[335:348]


d50_g1 = max(risk[317], risk[333], risk[334])
d50_g2 = risk[318]
d50_g3 = max(risk[319], risk[323])
d50_g4 = max(risk[320], risk[321])
d50_g5 = risk[322]
d50_g6 = risk[324]
d50_g7 = risk[325]
d50_g8 = risk[326]
d50_g9 = risk[327]
d50_g10 = max(risk[328], risk[329], risk[331])
d50_g11 = risk[330]
d50_g12 = risk[332]


d50_ratio_temp = (d50_g1*d50_g2*d50_g3*d50_g4*d50_g5*d50_g6*d50_g7*d50_g8*d50_g9*d50_g10*d50_g11*d50_g12)

if d50_ratio_temp >= 1:

    d50_ratio = d50_ratio_temp

elif d50_ratio_temp < 1:

    d50_ratio = 1.00


d50_ratio = format(d50_ratio, '.2f')



###########
# D51: 肝癌


d51 = gene_risk.iloc[335:348]


d51_g1 = max(risk[335], risk[346], risk[336])
d51_g2 = max(risk[337], risk[345])
d51_g3 = risk[338]
d51_g4 = risk[339]
d51_g5 = risk[340]
d51_g6 = risk[341]
d51_g7 = risk[342]
d51_g8 = risk[343]
d51_g9 = risk[344]
d51_g10 = risk[347]


d51_ratio_temp = (d51_g1*d51_g2*d51_g3*d51_g4*d51_g5*d51_g6*d51_g7*d51_g8*d51_g9*d51_g10)

if d51_ratio_temp >= 1:

    d51_ratio = d51_ratio_temp

elif d51_ratio_temp < 1:

    d51_ratio = 1.00


d51_ratio = format(d51_ratio, '.2f')



###########
# D52: 乳癌

d52 = gene_risk.iloc[348:363]


d52_g1 = max(risk[349], risk[356])
d52_g2 = risk[350]
d52_g3 = max(risk[352], risk[353])
d52_g4 = max(risk[466], risk[467])
d52_g5 = risk[357]
d52_g6 = risk[358]
d52_g7 = risk[359]
d52_g8 = risk[360]
d52_g9 = risk[361]
d52_g10 = risk[362]
d52_g11 = risk[348]
d52_g12 = risk[351]
d52_g13 = risk[354]
d52_g14 = risk[355]


d52_ratio_temp = (d52_g1*d52_g2*d52_g3*d52_g4*d52_g5*d52_g6*d52_g7*d52_g8*d52_g9*d52_g10*d52_g11*d52_g12*d52_g13*d52_g14)*1.1

if d52_ratio_temp >= 15:

    d52_ratio = 15.00

elif d52_ratio_temp < 1:

    d52_ratio = 1.00

elif d52_ratio_temp >= 1:

    d52_ratio = d52_ratio_temp



d52_ratio = format(d52_ratio, '.2f')




############
# D53: 卵巢癌


d53 = gene_risk.iloc[363:373]


d53_g1 = risk[363]
d53_g2 = max(risk[364], risk[366], risk[371])
d53_g3 = max(risk[365], risk[367], risk[368])
d53_g4 = risk[369]
d53_g5 = risk[370]
d53_g6 = risk[372]


d53_ratio_temp = (d53_g1*d53_g2*d53_g3*d53_g4*d53_g5*d53_g6)

if d53_ratio_temp >= 1:

    d53_ratio = d53_ratio_temp

elif d53_ratio_temp < 1:

    d53_ratio = 1.00


d53_ratio = format(d53_ratio, '.2f')



############
# D54: 胰臟癌


d54 = gene_risk.iloc[373:381]


d54_g1 = max(risk[373], risk[379])
d54_g2 = risk[374]
d54_g3 = risk[375]
d54_g4 = risk[376]
d54_g5 = risk[377]
d54_g6 = risk[378]
d54_g7 = risk[380]


d54_ratio_temp = (d54_g1*d54_g2*d54_g3*d54_g4*d54_g5*d54_g6*d54_g7)

if d54_ratio_temp >= 1:

    d54_ratio = d54_ratio_temp

elif d54_ratio_temp < 1:

    d54_ratio = 1.00


d54_ratio = format(d54_ratio, '.2f')



##############
# D55: 子宮頸癌


d55 = gene_risk.iloc[381:395]


d55_g1 = max(risk[381], risk[386], risk[389])
d55_g2 = risk[382]
d55_g3 = risk[383]
d55_g4 = risk[384]
d55_g5 = risk[385]
d55_g6 = risk[387]
d55_g7 = risk[388]
d55_g8 = risk[390]
d55_g9 = max(risk[391], risk[394])
d55_g10 = risk[392]
d55_g11 = risk[393]


d55_ratio_temp = (d55_g1*d55_g2*d55_g3*d55_g4*d55_g5*d55_g6*d55_g7*d55_g8*d55_g9*d55_g10*d55_g11)*1.3

if d55_ratio_temp > 10:

    d55_ratio = 9.85

elif d55_ratio_temp >= 1:

    d55_ratio = d55_ratio_temp

elif d55_ratio_temp < 1:

    d55_ratio = 1.00


d55_ratio = format(d55_ratio, '.2f')


##############
# D56: 口腔癌


d56 = gene_risk.iloc[395:403]


d56_g1 = max(risk[395], risk[398], risk[399], risk[400])
d56_g2 = risk[396]
d56_g3 = risk[397]
d56_g4 = risk[401]
d56_g5 = risk[402]


d56_ratio_temp = (d56_g1*d56_g2*d56_g3*d56_g4*d56_g5)

if d56_ratio_temp >= 1:

    d56_ratio = d56_ratio_temp

elif d56_ratio_temp < 1:

    d56_ratio = 1.00


d56_ratio = format(d56_ratio, '.2f')


##############
# D57: 攝護腺癌


d57 = gene_risk.iloc[403:410]


d57_g1 = risk[403]
d57_g2 = risk[404]
d57_g3 = risk[405]
d57_g4 = max(risk[406], risk[409])
d57_g5 = risk[407]
d57_g6 = risk[408]


d57_ratio_temp = (d57_g1*d57_g2*d57_g3*d57_g4*d57_g5*d57_g6)

if d57_ratio_temp >= 1:

    d57_ratio = d57_ratio_temp

elif d57_ratio_temp < 1:

    d57_ratio = 1.00


d57_ratio = format(d57_ratio, '.2f')



##############
# D58: 高度近視


d58 = gene_risk.iloc[410:415]


d58_g1 = risk[410]
d58_g2 = risk[411]
d58_g3 = risk[412]
d58_g4 = risk[413]
d58_g5 = risk[414]


d58_ratio_temp = (d58_g1*d58_g2*d58_g3*d58_g4*d58_g5)

if d58_ratio_temp >= 1:

    d58_ratio = d58_ratio_temp

elif d58_ratio_temp < 1:

    d58_ratio = 1.00


d58_ratio = format(d58_ratio, '.2f')



############
# D59: 肌少症


d59 = gene_risk.iloc[415:419]


d59_g1 = risk[415]
d59_g2 = risk[416]
d59_g3 = risk[417]
d59_g4 = risk[418]


d59_ratio_temp = (d59_g1*d59_g2*d59_g3*d59_g4)*0.85

if d59_ratio_temp >= 1:

    d59_ratio = d59_ratio_temp

elif d59_ratio_temp < 1:

    d59_ratio = 1.00


d59_ratio = format(d59_ratio, '.2f')




################
# D60: 過敏性鼻炎


d60 = gene_risk.iloc[419:428]


d60_g1 = risk[419]
d60_g2 = risk[420]
d60_g3 = risk[421]
d60_g4 = risk[422]
d60_g5 = risk[423]
d60_g6 = max(risk[424], risk[427])
d60_g7 = risk[425]
d60_g8 = risk[426]


d60_ratio_temp = (d60_g1*d60_g2*d60_g3*d60_g4*d60_g5*d60_g6*d60_g7*d60_g8)*1.1

if d60_ratio_temp >= 1:

    d60_ratio = d60_ratio_temp

elif d60_ratio_temp < 1:

    d60_ratio = 1.00


d60_ratio = format(d60_ratio, '.2f')



##################
# D61: 女性尿道感染


d61 = gene_risk.iloc[428:431]


d61_g1 = risk[428]
d61_g2 = risk[429]
d61_g3 = risk[430]



d61_ratio_temp = (d61_g1*d61_g2*d61_g3)*1.2

if d61_ratio_temp >= 1:

    d61_ratio = d61_ratio_temp

elif d61_ratio_temp < 1:

    d61_ratio = 1.00


d61_ratio = format(d61_ratio, '.2f')



##################
# D62: 異位性皮膚炎


d62 = gene_risk.iloc[431:437]


d62_g1 = risk[431]
d62_g2 = risk[432]
d62_g3 = risk[433]
d62_g4 = risk[434]
d62_g5 = risk[435]
d62_g6 = risk[436]


d62_ratio_temp = (d62_g1*d62_g2*d62_g3*d62_g4*d62_g5*d62_g6)*0.95

if d62_ratio_temp >= 1:

    d62_ratio = d62_ratio_temp

elif d62_ratio_temp < 1:

    d62_ratio = 1.00


d62_ratio = format(d62_ratio, '.2f')



###########
# D63: 乾癬


d63 = gene_risk.iloc[437:447]


d63_g1 = max(risk[437], risk[441], risk[445])
d63_g2 = risk[438]
d63_g3 = risk[439]
d63_g4 = risk[442]
d63_g5 = risk[443]
d63_g6 = max(risk[444], risk[440])
d63_g7 = risk[446]


d63_ratio_temp = (d63_g1*d63_g2*d63_g3*d63_g4*d63_g5*d63_g6*d63_g7)*0.95

if d63_ratio_temp >= 1:

    d63_ratio = d63_ratio_temp

elif d63_ratio_temp < 1:

    d63_ratio = 1.00


d63_ratio = format(d63_ratio, '.2f')



##############
# D64: 靜脈曲張


d64 = gene_risk.iloc[447:450]


d64_g1 = risk[447]
d64_g2 = risk[448]
d64_g3 = risk[449]



d64_ratio_temp = (d64_g1*d64_g2*d64_g3)*1.1

if d64_ratio_temp >= 1:

    d64_ratio = d64_ratio_temp

elif d64_ratio_temp < 1:

    d64_ratio = 1.00


d64_ratio = format(d64_ratio, '.2f')


#############
# D65: 胰臟炎


d65 = gene_risk.iloc[450:454]


d65_g1 = risk[450]
d65_g2 = risk[451]
d65_g3 = risk[452]
d65_g4 = risk[453]


d65_ratio_temp = (d65_g1*d65_g2*d65_g3*d65_g4)*1.2

if d65_ratio_temp >= 1:

    d65_ratio = d65_ratio_temp

elif d65_ratio_temp < 1:

    d65_ratio = 1.00


d65_ratio = format(d65_ratio, '.2f')





#############
# D66: 腎衰竭


d66 = gene_risk.iloc[454:457]


d66_g1 = risk[454]
d66_g2 = risk[455]
d66_g3 = risk[456]



d66_ratio_temp = (d66_g1*d66_g2*d66_g3)*1.05

if d66_ratio_temp >= 1:

    d66_ratio = d66_ratio_temp

elif d66_ratio_temp < 1:

    d66_ratio = 1.00


d66_ratio = format(d66_ratio, '.2f')



#############
# D67: 牙周病


d67 = gene_risk.iloc[457:461]


d67_g1 = risk[458]
d67_g2 = risk[459]
d67_g3 = risk[460]
d67_g4 = risk[457]


d67_ratio_temp = (d67_g1*d67_g2*d67_g3*d67_g4)

if d67_ratio_temp >= 1:

    d67_ratio = d67_ratio_temp

elif d67_ratio_temp < 1:

    d67_ratio = 1.00


d67_ratio = format(d67_ratio, '.2f')



#############
# D68: 淋巴癌


d68 = gene_risk.iloc[461:466]


d68_g1 = risk[461]
d68_g2 = risk[462]
d68_g3 = risk[463]
d68_g4 = risk[464]
d68_g5 = risk[465]


d68_ratio_temp = (d68_g1*d68_g2*d68_g3*d68_g4*d68_g5)

if d68_ratio_temp >= 1:

    d68_ratio = d68_ratio_temp

elif d68_ratio_temp < 1:

    d68_ratio = 1.00


d68_ratio = format(d68_ratio, '.2f')



print('(8) ' + G2_num + ' finish calculate disease ratio.' + '\n')



# male or female

if gender == "女":

    female_disease = ['肥胖症', '第二型糖尿病', '高血壓', '高血脂', '高尿酸血症',
                  '冠狀動脈疾病', '心房顫動', '腦中風', '靜脈曲張',
                  '晚發型阿茲海默症', '帕金森氏症', '退化性關節炎', '骨質疏鬆', '肌少症',
                  '子宮內膜異位', '子宮肌瘤', '多囊性卵巢症候群', '女性尿道感染',
                  '類風濕性關節炎', '紅斑性狼瘡', '自體免疫甲狀腺疾病', '僵直性脊椎炎',
                  '肝硬化', '脂肪肝', '膽石症(肝內結石、膽結石)', '消化性潰瘍、胃食道逆流', '大腸息肉症', '胰臟炎',
                  '白內障', '青光眼', '黃斑部病變', '高度近視',
                  '憂鬱症', '躁鬱症', '思覺失調症',
                  '慢性阻塞性肺病', '腎結石', '腎衰竭', '氣喘', '過敏性鼻炎', '異位性皮膚炎', '乾癬', '牙周病',
                  '口腔癌', '鼻咽癌', '食道癌', '肺癌', '胃癌', '肝癌', '大腸癌', '胰臟癌', '乳癌', '卵巢癌', '子宮頸癌', '膀胱癌', '淋巴癌']

    female_disease_ratio = [d1_ratio, d3_ratio, d7_ratio, d8_ratio, d2_ratio,
                            d4_ratio, d5_ratio, d6_ratio, d64_ratio,
                            d15_ratio, d16_ratio, d18_ratio, d17_ratio, d59_ratio,
                            d32_ratio, d33_ratio, d34_ratio, d61_ratio,
                            d11_ratio, d12_ratio, d13_ratio, d10_ratio,
                            d23_ratio, d24_ratio, d25_ratio, d27_ratio, d28_ratio, d65_ratio,
                            d19_ratio, d21_ratio, d20_ratio, d58_ratio,
                            d35_ratio, d36_ratio, d37_ratio,
                            d22_ratio, d26_ratio, d66_ratio, d40_ratio, d60_ratio, d62_ratio, d63_ratio, d67_ratio,
                            d56_ratio, d49_ratio, d47_ratio, d48_ratio, d50_ratio, d51_ratio, d46_ratio, d54_ratio, d52_ratio, d53_ratio, d55_ratio, d45_ratio, d68_ratio]



    female_risk = []

    for ratio in female_disease_ratio:

        if float(ratio) > 2:
            female_risk.append("高風險")
        elif float(ratio) <= 2:
            female_risk.append("一般性風險")



    female_disease_ratio = pd.DataFrame(list(zip(female_disease, female_risk, female_disease_ratio)), columns=['female_disease', 'female_risk', 'female_disease_ratio'])


    ########################################
    # female_disease_ratio write ro csv file

    outname = G2_num + '_female_disease_ratio.csv'

    outdir = '../result/' + G2_num[2:8] + '/' + G2_num + '/'
    if not os.path.exists(outdir):
        os.mkdir(outdir)

    fullname = os.path.join(outdir, outname)

    female_disease_ratio.to_csv(fullname)


    print('(9) ' + G2_num + ' finish output ' + fullname + '\n')


    female_disease_ratio.head(56)

    ###################
    # High Risk disease
    ###################


    ######################
    # female disease ratio

    row_risk = pd.to_numeric(female_disease_ratio["female_disease_ratio"]) > 2

    female_risk_disease = female_disease_ratio.loc[row_risk]

    female_risk_disease


    ###############################
    # Lifestyle: female disease ratio

    female_lifestyle_risk = []


    for disease in female_risk_disease['female_disease']:
        description = lifestyle[lifestyle['疾病'].str.match(disease)].iloc[0,1]
        female_lifestyle_risk.append(description)


    female_risk_disease.insert(3, 'lifestyle', female_lifestyle_risk, True)


    # female_risk_disease write to csv file

    outname = G2_num + '_female_risk_disease.csv'

    outdir = '../result/' + G2_num[2:8] + '/' + G2_num + '/'
    if not os.path.exists(outdir):
        os.mkdir(outdir)

    fullname = os.path.join(outdir, outname)

    female_risk_disease.to_csv(fullname)

    print('(10) ' + G2_num + ' finish output ' + fullname + '\n')

    female_risk_disease


    ######################
    # female nutrient risk

    # match disease ratio
    female_ratio = []

    for disease in nutrient_gene['disease']:

        if disease in list(female_disease_ratio['female_disease']):

            a = female_disease_ratio.loc[female_disease_ratio['female_disease'] == disease].index[0]

            female_ratio.append(female_disease_ratio.iloc[a, 2])

        elif disease not in list(female_disease_ratio['female_disease']):

            female_ratio.append(0)




    # match genotype

    genotype = []

    for rs in nutrient_gene['rs number']:

        if rs in list(gene_risk['rs_number']):

            a = gene_risk.loc[gene_risk['rs_number'] == rs].index[0]

            genotype.append(gene_risk.iloc[a, 2])

        elif rs not in list(gene_risk['rs_number']):

            genotype.append("")


    # get the encode of each allele risk

    risk_encode = []

    for i in range(nutrient_gene.shape[0]):

        encode = (nutrient_gene['disease_code'][i] + nutrient_gene['rs number'][i] + genotype[i])

        risk_encode.append(str(encode))


    risk = []

    for encode in risk_encode:

        if encode in list(risk_factor['Allele_risk']):

            a = risk_factor.loc[risk_factor['Allele_risk'] == encode].index[0]

            #risk.append(format(float(risk_factor.iloc[a,1]), '.9f'))
            risk.append(float(risk_factor.iloc[a,1]))

        elif encode not in list(risk_factor['Allele_risk']):

            risk.append(1)


    female_nutrient_risk = pd.DataFrame(list(zip(nutrient_gene['disease'], nutrient_gene['gene'], nutrient_gene['disease_code'], nutrient_gene['rs number'], genotype, risk_encode, risk, female_ratio, nutrient_gene['nutrient'])), columns=['disease', 'gene', 'disease_code', 'rs number', 'genotype','risk encode', 'gene risk', 'disease ratio', 'nutrient'])
    female_nutrient_risk.head(150)

    # get nutrient matches (disease ratio >= 2) & (gene risk >= 1)

    female_nutrient_result = female_nutrient_risk.loc[(pd.to_numeric(female_nutrient_risk['disease ratio'], errors='coerce') >= 2) & (pd.to_numeric(female_nutrient_risk['gene risk'], errors='coerce') > 1)]

    female_nutrient_result

    nutrient_name = female_nutrient_result['nutrient'].value_counts().index
    count = female_nutrient_result['nutrient'].value_counts()

    description = []
    rank = []

    for name in nutrient_name:

        if name in list(nutrient['保健品名']):

            a = nutrient.loc[nutrient['保健品名'] == name].index[0]

            description.append(nutrient.iloc[a, 1])
            rank.append(nutrient.iloc[a, 2])

        elif rs not in list(nutrient['保健品名']):

            description.append(0)


    female_nutrient_description = pd.DataFrame(list(zip(nutrient_name, description, count, rank)), columns = ['nutrient name', 'description', 'count', 'rank'])
    female_nutrient_description_all = female_nutrient_description.sort_values(['count', 'rank'], ascending=[False, True])

    female_nutrient_description = female_nutrient_description_all.iloc[0:6,0:2]
    female_nutrient_description



    # female_nutrient_description write to csv file

    outname = G2_num + '_female_nutrient_description.csv'

    outdir = '../result/' + G2_num[2:8] + '/' + G2_num + '/'
    if not os.path.exists(outdir):
        os.mkdir(outdir)

    fullname = os.path.join(outdir, outname)

    female_nutrient_description.to_csv(fullname)

    print('(11) ' + G2_num + ' finish output ' + fullname + '\n')



    female_nutrient_description




    #######################################
    # Creat disease_risk_ratio dataframe SC
    #######################################

    ####################
    # female disease ratio


    female_disease = ['肥胖症', '第二型糖尿病', '高血压', '高血脂', '高尿酸血症',
                      '冠状动脉疾病', '心房颤动', '脑中风', '静脉曲张',
                      '晚发型阿兹海默症', '帕金森氏症', '退化性关节炎', '骨质疏松', '肌少症',
                      '子宫内膜异位', '子宫肌瘤', '多囊性卵巢症候群', '女性尿道感染',
                      '类风湿性关节炎', '红斑性狼疮', '自体免疫甲状腺疾病', '僵直性脊椎炎',
                      '肝硬化', '脂肪肝', '胆石症(肝内结石、胆结石)', '消化性溃疡、胃食道逆流', '大肠息肉症', '胰脏炎',
                      '白内障', '青光眼', '黄斑部病变', '高度近视',
                      '忧郁症', '躁郁症', '思觉失调症',
                      '慢性阻塞性肺病', '肾结石', '肾衰竭', '气喘', '过敏性鼻炎', '异位性皮肤炎', '乾癣', '牙周病',
                      '口腔癌', '鼻咽癌', '食道癌', '肺癌', '胃癌', '肝癌', '大肠癌', '胰脏癌', '乳癌', '卵巢癌', '子宫颈癌', '膀胱癌', '淋巴癌']

    female_disease_ratio = [d1_ratio, d3_ratio, d7_ratio, d8_ratio, d2_ratio,
                            d4_ratio, d5_ratio, d6_ratio, d64_ratio,
                            d15_ratio, d16_ratio, d18_ratio, d17_ratio, d59_ratio,
                            d32_ratio, d33_ratio, d34_ratio, d61_ratio,
                            d11_ratio, d12_ratio, d13_ratio, d10_ratio,
                            d23_ratio, d24_ratio, d25_ratio, d27_ratio, d28_ratio, d65_ratio,
                            d19_ratio, d21_ratio, d20_ratio, d58_ratio,
                            d35_ratio, d36_ratio, d37_ratio,
                            d22_ratio, d26_ratio, d66_ratio, d40_ratio, d60_ratio, d62_ratio, d63_ratio, d67_ratio,
                            d56_ratio, d49_ratio, d47_ratio, d48_ratio, d50_ratio, d51_ratio, d46_ratio, d54_ratio, d52_ratio, d53_ratio, d55_ratio, d45_ratio, d68_ratio]



    female_risk = []

    for ratio in female_disease_ratio:

        if float(ratio) > 2:
            female_risk.append("高风险")
        elif float(ratio) <= 2:
            female_risk.append("一般性风险")



    female_disease_ratio_SC = pd.DataFrame(list(zip(female_disease, female_risk, female_disease_ratio)), columns=['female_disease', 'female_risk', 'female_disease_ratio'])


    ########################################
    # female_disease_ratio write ro csv file

    outname = G2_num + '_female_disease_ratio_SC.csv'

    outdir = '../result/' + G2_num[2:8] + '/' + G2_num + '/'
    if not os.path.exists(outdir):
        os.mkdir(outdir)

    fullname = os.path.join(outdir, outname)

    female_disease_ratio_SC.to_csv(fullname)


    print('(12) ' + G2_num + ' finish output ' + fullname + '\n')


    female_disease_ratio_SC.head(56)


    ###################
    # High Risk disease
    ###################


    ######################
    # female disease ratio

    row_risk = pd.to_numeric(female_disease_ratio_SC["female_disease_ratio"]) > 2

    female_risk_disease_SC = female_disease_ratio_SC.loc[row_risk]

    female_risk_disease_SC



    ###############################
    # Lifestyle: female disease ratio

    female_lifestyle_risk_SC = []


    for disease in female_risk_disease_SC['female_disease']:
        description = lifestyle_SC[lifestyle_SC['疾病'].str.match(disease)].iloc[0,1]
        female_lifestyle_risk_SC.append(description)


    female_risk_disease_SC.insert(3, 'lifestyle', female_lifestyle_risk_SC, True)


    # female_risk_disease write to csv file

    outname = G2_num + '_female_risk_disease_SC.csv'

    outdir = '../result/' + G2_num[2:8] + '/' + G2_num + '/'
    if not os.path.exists(outdir):
        os.mkdir(outdir)

    fullname = os.path.join(outdir, outname)

    female_risk_disease_SC.to_csv(fullname)

    print('(13) ' + G2_num + ' finish output ' + fullname + '\n')

    female_risk_disease_SC



    # SC nutrient description

    description_SC = []

    for name in nutrient_name:

        if name in list(nutrient_SC['保健品名']):

            a = nutrient_SC.loc[nutrient_SC['保健品名'] == name].index[0]

            description_SC.append(nutrient_SC.iloc[a, 3])

        elif rs not in list(nutrient_SC['保健品名']):

            description_SC.append(0)


    # SC nutrient name

    nutrient_name_SC = []

    for name in nutrient_name:

        if name in list(nutrient_SC['保健品名']):

            a = nutrient_SC.loc[nutrient_SC['保健品名'] == name].index[0]

            nutrient_name_SC.append(nutrient_SC.iloc[a, 2])


    nutrient_name_SC


    female_nutrient_description_SC = pd.DataFrame(list(zip(nutrient_name_SC, description_SC)), columns = ['nutrient name', 'description'])

    female_nutrient_description_SC


    # female_nutrient_description write to csv file

    outname = G2_num + '_female_nutrient_description_SC.csv'

    outdir = '../result/' + G2_num[2:8] + '/' + G2_num + '/'
    if not os.path.exists(outdir):
        os.mkdir(outdir)

    fullname = os.path.join(outdir, outname)

    female_nutrient_description_SC.to_csv(fullname)

    print('(14) ' + G2_num + ' finish output ' + fullname + '\n')


    print("")
    print("------------------------")
    print("高風險疾病數:", len(female_risk_disease.iloc[:,0]), " 個")
    print("")
    print(female_risk_disease.iloc[:,0])
    print("------------------------")

    print("")

    print("------------------------")
    print("特調個數:", len(female_nutrient_description.iloc[:,0]), " 個")
    print("")
    print(female_nutrient_description.iloc[:,0])
    print("------------------------")

    print("")
    print("-----------------------------")

    if (female_risk_disease.shape[0] >= 1 and female_risk_disease.shape[0] <= 3):
        print('Please use: "g2_f_p_1.php"')

    elif (female_risk_disease.shape[0] >= 4 and female_risk_disease.shape[0] <= 8):
        print('Please use: "g2_f_p_2.php"')

    elif (female_risk_disease.shape[0] >= 9 and female_risk_disease.shape[0] <= 13):
        print('Please use: "g2_f_p_3.php"')

    elif (female_risk_disease.shape[0] >= 14 and female_risk_disease.shape[0] <= 18):
        print('Please use: "g2_f_p_4.php"')

    elif (female_risk_disease.shape[0] >= 19 and female_risk_disease.shape[0] <= 23):
        print('Please use: "g2_f_p_5.php"')

    elif (female_risk_disease.shape[0] >= 24 and female_risk_disease.shape[0] <= 28):
        print('Please use: "g2_f_p_6.php"')

    elif (female_risk_disease.shape[0] >= 29 and female_risk_disease.shape[0] <= 33):
        print('Please use: "g2_f_p_7.php"')

    print("-----------------------------")
    print("")


elif gender == "男":

    ####################
    # male disease ratio

    male_disease = ['肥胖症', '第二型糖尿病', '高血壓', '高血脂', '高尿酸血症',
                    '冠狀動脈疾病', '心房顫動', '腦中風', '靜脈曲張',
                    '晚發型阿茲海默症', '帕金森氏症', '退化性關節炎', '骨質疏鬆', '肌少症',
                    '類風濕性關節炎', '紅斑性狼瘡', '自體免疫甲狀腺疾病', '僵直性脊椎炎',
                    '肝硬化', '脂肪肝', '膽石症(肝內結石、膽結石)', '消化性潰瘍、胃食道逆流', '大腸息肉症', '胰臟炎',
                    '白內障', '青光眼', '黃斑部病變', '高度近視',
                    '憂鬱症', '躁鬱症', '思覺失調症',
                    '慢性阻塞性肺病', '攝護腺肥大', '腎結石', '腎衰竭', '氣喘', '過敏性鼻炎', '異位性皮膚炎', '乾癬', '牙周病',
                    '口腔癌', '鼻咽癌', '食道癌', '肺癌', '胃癌', '肝癌', '大腸癌', '胰臟癌', '攝護腺癌', '膀胱癌', '淋巴癌']

    male_disease_ratio = [d1_ratio, d3_ratio, d7_ratio, d8_ratio, d2_ratio,
                          d4_ratio, d5_ratio, d6_ratio, d64_ratio,
                          d15_ratio, d16_ratio, d18_ratio, d17_ratio, d59_ratio,
                          d11_ratio, d12_ratio, d13_ratio, d10_ratio,
                          d23_ratio, d24_ratio, d25_ratio, d27_ratio, d28_ratio, d65_ratio,
                          d19_ratio, d21_ratio, d20_ratio, d58_ratio,
                          d35_ratio, d36_ratio, d37_ratio,
                          d22_ratio, d41_ratio, d26_ratio, d66_ratio, d40_ratio, d60_ratio, d62_ratio, d63_ratio, d67_ratio,
                          d56_ratio, d49_ratio, d47_ratio, d48_ratio, d50_ratio, d51_ratio, d46_ratio, d54_ratio, d57_ratio, d45_ratio, d68_ratio]


    male_risk = []

    for ratio in male_disease_ratio:

        if float(ratio) > 2:
            male_risk.append("高風險")
        elif float(ratio) <= 2:
            male_risk.append("一般性風險")



    male_disease_ratio = pd.DataFrame(list(zip(male_disease, male_risk, male_disease_ratio)), columns=['male_disease', 'male_risk', 'male_disease_ratio'])


    # male_disease_ratio write to csv file

    outname = G2_num + '_male_disease_ratio.csv'

    outdir = '../result/' + G2_num[2:8] + '/' + G2_num + '/'
    if not os.path.exists(outdir):
        os.mkdir(outdir)

    fullname = os.path.join(outdir, outname)

    male_disease_ratio.to_csv(fullname)

    print('(9) ' + G2_num + ' finish output ' + fullname + '\n')

    male_disease_ratio.head(52)



    ######################
    # male disease ratio

    row_risk = pd.to_numeric(male_disease_ratio["male_disease_ratio"]) > 2

    male_risk_disease = male_disease_ratio.loc[row_risk]

    male_risk_disease


    ###############################
    # Lifestyle: male disease ratio

    male_lifestyle_risk = []


    for disease in male_risk_disease['male_disease']:
        description = lifestyle[lifestyle['疾病'].str.match(disease)].iloc[0,1]
        male_lifestyle_risk.append(description)


    male_risk_disease.insert(3, 'lifestyle', male_lifestyle_risk, True)

    # male_risk_disease file
    outname = G2_num + '_male_risk_disease.csv'

    outdir = '../result/' + G2_num[2:8] + '/' + G2_num + '/'
    if not os.path.exists(outdir):
        os.mkdir(outdir)

    fullname = os.path.join(outdir, outname)

    male_risk_disease.to_csv(fullname)

    print('(10) ' + G2_num + ' finish output ' + fullname + '\n')

    male_risk_disease



    ######################
    # male nutrient risk

    # match disease ratio
    male_ratio = []

    for disease in nutrient_gene['disease']:

        if disease in list(male_disease_ratio['male_disease']):

            a = male_disease_ratio.loc[male_disease_ratio['male_disease'] == disease].index[0]

            male_ratio.append(male_disease_ratio.iloc[a, 2])

        elif disease not in list(male_disease_ratio['male_disease']):

            male_ratio.append(0)




    # match genotype

    genotype = []

    for rs in nutrient_gene['rs number']:

        if rs in list(gene_risk['rs_number']):

            a = gene_risk.loc[gene_risk['rs_number'] == rs].index[0]

            genotype.append(gene_risk.iloc[a, 2])

        elif rs not in list(gene_risk['rs_number']):

            genotype.append("")


    # get the encode of each allele risk

    risk_encode = []

    for i in range(nutrient_gene.shape[0]):

        encode = (nutrient_gene['disease_code'][i] + nutrient_gene['rs number'][i] + genotype[i])

        risk_encode.append(str(encode))


    risk = []

    for encode in risk_encode:

        if encode in list(risk_factor['Allele_risk']):

            a = risk_factor.loc[risk_factor['Allele_risk'] == encode].index[0]

            #risk.append(format(float(risk_factor.iloc[a,1]), '.9f'))
            risk.append(float(risk_factor.iloc[a,1]))

        elif encode not in list(risk_factor['Allele_risk']):

            risk.append(1)


    male_nutrient_risk = pd.DataFrame(list(zip(nutrient_gene['disease'], nutrient_gene['gene'], nutrient_gene['disease_code'], nutrient_gene['rs number'], genotype, risk_encode, risk, male_ratio, nutrient_gene['nutrient'])), columns=['disease', 'gene', 'disease_code', 'rs number', 'genotype','risk encode', 'gene risk', 'disease ratio', 'nutrient'])
    male_nutrient_risk.head(150)

    # get nutrient matches (disease ratio >= 2) & (gene risk >= 1)

    male_nutrient_result = male_nutrient_risk.loc[(pd.to_numeric(male_nutrient_risk['disease ratio'], errors='coerce') >= 2) & (pd.to_numeric(male_nutrient_risk['gene risk'], errors='coerce') > 1)]

    male_nutrient_result

    nutrient_name = male_nutrient_result['nutrient'].value_counts().index
    count = male_nutrient_result['nutrient'].value_counts()

    description = []
    rank = []

    for name in nutrient_name:

        if name in list(nutrient['保健品名']):

            a = nutrient.loc[nutrient['保健品名'] == name].index[0]

            description.append(nutrient.iloc[a, 1])
            rank.append(nutrient.iloc[a, 2])

        elif rs not in list(nutrient['保健品名']):

            description.append(0)


    male_nutrient_description = pd.DataFrame(list(zip(nutrient_name, description, count, rank)), columns = ['nutrient name', 'description', 'count', 'rank'])
    male_nutrient_description_all = male_nutrient_description.sort_values(['count', 'rank'], ascending=[False, True])

    male_nutrient_description = male_nutrient_description_all.iloc[0:6,0:2]
    male_nutrient_description


    # male_nutrient_description file
    outname = G2_num + '_male_nutrient_description.csv'

    outdir = '../result/' + G2_num[2:8] + '/' + G2_num + '/'
    if not os.path.exists(outdir):
        os.mkdir(outdir)

    fullname = os.path.join(outdir, outname)

    male_nutrient_description.to_csv(fullname)

    print('(11) ' + G2_num + ' finish output ' + fullname + '\n')



    male_nutrient_description



    #######################
    # male disease ratio SC

    male_disease = ['肥胖症', '第二型糖尿病', '高血压', '高血脂', '高尿酸血症',
                    '冠状动脉疾病', '心房颤动', '脑中风', '静脉曲张',
                    '晚发型阿兹海默症', '帕金森氏症', '退化性关节炎', '骨质疏松', '肌少症',
                    '类风湿性关节炎', '红斑性狼疮', '自体免疫甲状腺疾病', '僵直性脊椎炎',
                    '肝硬化', '脂肪肝', '胆石症(肝内结石、胆结石)', '消化性溃疡、胃食道逆流', '大肠息肉症', '胰脏炎',
                    '白内障', '青光眼', '黄斑部病变', '高度近视',
                    '忧郁症', '躁郁症', '思觉失调症',
                    '慢性阻塞性肺病', '摄护腺肥大', '肾结石', '肾衰竭', '气喘', '过敏性鼻炎', '异位性皮肤炎', '乾癣', '牙周病',
                    '口腔癌', '鼻咽癌', '食道癌', '肺癌', '胃癌', '肝癌', '大肠癌', '胰脏癌', '摄护腺癌', '膀胱癌', '淋巴癌']

    male_disease_ratio = [d1_ratio, d3_ratio, d7_ratio, d8_ratio, d2_ratio,
                          d4_ratio, d5_ratio, d6_ratio, d64_ratio,
                          d15_ratio, d16_ratio, d18_ratio, d17_ratio, d59_ratio,
                          d11_ratio, d12_ratio, d13_ratio, d10_ratio,
                          d23_ratio, d24_ratio, d25_ratio, d27_ratio, d28_ratio, d65_ratio,
                          d19_ratio, d21_ratio, d20_ratio, d58_ratio,
                          d35_ratio, d36_ratio, d37_ratio,
                          d22_ratio, d41_ratio, d26_ratio, d66_ratio, d40_ratio, d60_ratio, d62_ratio, d63_ratio, d67_ratio,
                          d56_ratio, d49_ratio, d47_ratio, d48_ratio, d50_ratio, d51_ratio, d46_ratio, d54_ratio, d57_ratio, d45_ratio, d68_ratio]


    male_risk = []

    for ratio in male_disease_ratio:

        if float(ratio) > 2:
            male_risk.append("高风险")
        elif float(ratio) <= 2:
            male_risk.append("一般性风险")



    male_disease_ratio_SC = pd.DataFrame(list(zip(male_disease, male_risk, male_disease_ratio)), columns=['male_disease', 'male_risk', 'male_disease_ratio'])


    # male_disease_ratio write to csv file

    outname = G2_num + '_male_disease_ratio_SC.csv'

    outdir = '../result/' + G2_num[2:8] + '/' + G2_num + '/'
    if not os.path.exists(outdir):
        os.mkdir(outdir)

    fullname = os.path.join(outdir, outname)

    male_disease_ratio_SC.to_csv(fullname)

    print('(12) ' + G2_num + ' finish output ' + fullname + '\n')

    male_disease_ratio_SC.head(52)


    ###################
    # High Risk disease
    ###################


    ######################
    # female disease ratio

    row_risk = pd.to_numeric(male_disease_ratio_SC["male_disease_ratio"]) > 2

    male_risk_disease_SC = male_disease_ratio_SC.loc[row_risk]

    male_risk_disease_SC



    ###############################
    # Lifestyle: female disease ratio

    male_lifestyle_risk_SC = []


    for disease in male_risk_disease_SC['male_disease']:
        description = lifestyle_SC[lifestyle_SC['疾病'].str.match(disease)].iloc[0,1]
        male_lifestyle_risk_SC.append(description)


    male_risk_disease_SC.insert(3, 'lifestyle', male_lifestyle_risk_SC, True)


    # male_risk_disease write to csv file

    outname = G2_num + '_male_risk_disease_SC.csv'

    outdir = '../result/' + G2_num[2:8] + '/' + G2_num + '/'
    if not os.path.exists(outdir):
        os.mkdir(outdir)

    fullname = os.path.join(outdir, outname)

    male_risk_disease_SC.to_csv(fullname)

    print('(13) ' + G2_num + ' finish output ' + fullname + '\n')

    male_risk_disease_SC



    # SC nutrient description

    description_SC = []

    for name in nutrient_name:

        if name in list(nutrient_SC['保健品名']):

            a = nutrient_SC.loc[nutrient_SC['保健品名'] == name].index[0]

            description_SC.append(nutrient_SC.iloc[a, 3])

        elif rs not in list(nutrient_SC['保健品名']):

            description_SC.append(0)


    # SC nutrient name

    nutrient_name_SC = []

    for name in nutrient_name:

        if name in list(nutrient_SC['保健品名']):

            a = nutrient_SC.loc[nutrient_SC['保健品名'] == name].index[0]

            nutrient_name_SC.append(nutrient_SC.iloc[a, 2])


    nutrient_name_SC


    male_nutrient_description_SC = pd.DataFrame(list(zip(nutrient_name_SC, description_SC)), columns = ['nutrient name', 'description'])

    male_nutrient_description_SC


    # female_nutrient_description write to csv file

    outname = G2_num + '_male_nutrient_description_SC.csv'

    outdir = '../result/' + G2_num[2:8] + '/' + G2_num + '/'
    if not os.path.exists(outdir):
        os.mkdir(outdir)

    fullname = os.path.join(outdir, outname)

    male_nutrient_description_SC.to_csv(fullname)

    print('(14) ' + G2_num + ' finish output ' + fullname + '\n')




    print("")
    print("------------------------")
    print("高風險疾病數:", len(male_risk_disease.iloc[:,0]), " 個")
    print("")
    print(male_risk_disease.iloc[:,0])
    print("------------------------")

    print("")

    print("------------------------")
    print("特調個數:", len(male_nutrient_description.iloc[:,0]), " 個")
    print("")
    print(male_nutrient_description.iloc[:,0])
    print("------------------------")

    print("")
    print("-----------------------------")

    if (male_risk_disease.shape[0] >= 1 and male_risk_disease.shape[0] <= 3):
        print('Please use: "g2_m_p_1.php"')

    elif (male_risk_disease.shape[0] >= 4 and male_risk_disease.shape[0] <= 8):
        print('Please use: "g2_m_p_2.php"')

    elif (male_risk_disease.shape[0] >= 9 and male_risk_disease.shape[0] <= 13):
        print('Please use: "g2_m_p_3.php"')

    elif (male_risk_disease.shape[0] >= 14 and male_risk_disease.shape[0] <= 18):
        print('Please use: "g2_m_p_4.php"')

    elif (male_risk_disease.shape[0] >= 19 and male_risk_disease.shape[0] <= 23):
        print('Please use: "g2_m_p_5.php"')

    elif (male_risk_disease.shape[0] >= 24 and male_risk_disease.shape[0] <= 28):
        print('Please use: "g2_m_p_6.php"')

    elif (male_risk_disease.shape[0] >= 29 and male_risk_disease.shape[0] <= 33):
        print('Please use: "g2_f_p_7.php"')

    print("-----------------------------")
    print("")


print('Congratulation! '+ G2_num + ' finish all the calculation process from step (1) to (14)!!\n')
