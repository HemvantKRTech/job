<?php
namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use App\Models\Country;

    class CountrySeeder extends Seeder
    {
        public function run()
        {
            $countries = [
                ['name' => 'Afghanistan', 'short_name' => 'AF', 'code' => '+93', 'currency_name' => 'Afghan Afghani', 'currency_symbol' => '؋'],
                ['name' => 'Albania', 'short_name' => 'AL', 'code' => '+355', 'currency_name' => 'Albanian Lek', 'currency_symbol' => 'L'],
                ['name' => 'Algeria', 'short_name' => 'DZ', 'code' => '+213', 'currency_name' => 'Algerian Dinar', 'currency_symbol' => 'د.ج'],
                ['name' => 'Andorra', 'short_name' => 'AD', 'code' => '+376', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
                ['name' => 'Angola', 'short_name' => 'AO', 'code' => '+244', 'currency_name' => 'Angolan Kwanza', 'currency_symbol' => 'Kz'],
                ['name' => 'Argentina', 'short_name' => 'AR', 'code' => '+54', 'currency_name' => 'Argentine Peso', 'currency_symbol' => '$'],
                ['name' => 'Armenia', 'short_name' => 'AM', 'code' => '+374', 'currency_name' => 'Armenian Dram', 'currency_symbol' => '֏'],
                ['name' => 'Australia', 'short_name' => 'AU', 'code' => '+61', 'currency_name' => 'Australian Dollar', 'currency_symbol' => 'A$'],
                ['name' => 'Austria', 'short_name' => 'AT', 'code' => '+43', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
                ['name' => 'Azerbaijan', 'short_name' => 'AZ', 'code' => '+994', 'currency_name' => 'Azerbaijani Manat', 'currency_symbol' => '₼'],
                ['name' => 'Bahamas', 'short_name' => 'BS', 'code' => '+1-242', 'currency_name' => 'Bahamian Dollar', 'currency_symbol' => 'B$'],
                ['name' => 'Bahrain', 'short_name' => 'BH', 'code' => '+973', 'currency_name' => 'Bahraini Dinar', 'currency_symbol' => '.د.ب'],
                ['name' => 'Bangladesh', 'short_name' => 'BD', 'code' => '+880', 'currency_name' => 'Bangladeshi Taka', 'currency_symbol' => '৳'],
                ['name' => 'Barbados', 'short_name' => 'BB', 'code' => '+1-246', 'currency_name' => 'Barbadian Dollar', 'currency_symbol' => 'Bds$'],
                ['name' => 'Belarus', 'short_name' => 'BY', 'code' => '+375', 'currency_name' => 'Belarusian Ruble', 'currency_symbol' => 'Br'],
                ['name' => 'Belgium', 'short_name' => 'BE', 'code' => '+32', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
                ['name' => 'Belize', 'short_name' => 'BZ', 'code' => '+501', 'currency_name' => 'Belize Dollar', 'currency_symbol' => 'BZ$'],
                ['name' => 'Benin', 'short_name' => 'BJ', 'code' => '+229', 'currency_name' => 'West African CFA Franc', 'currency_symbol' => 'CFA'],
                ['name' => 'Bhutan', 'short_name' => 'BT', 'code' => '+975', 'currency_name' => 'Bhutanese Ngultrum', 'currency_symbol' => 'Nu.'],
                ['name' => 'Bolivia', 'short_name' => 'BO', 'code' => '+591', 'currency_name' => 'Bolivian Boliviano', 'currency_symbol' => 'Bs.'],
                ['name' => 'Bosnia and Herzegovina', 'short_name' => 'BA', 'code' => '+387', 'currency_name' => 'Bosnia-Herzegovina Convertible Mark', 'currency_symbol' => 'KM'],
                ['name' => 'Botswana', 'short_name' => 'BW', 'code' => '+267', 'currency_name' => 'Botswana Pula', 'currency_symbol' => 'P'],
                ['name' => 'Brazil', 'short_name' => 'BR', 'code' => '+55', 'currency_name' => 'Brazilian Real', 'currency_symbol' => 'R$'],
                ['name' => 'Brunei', 'short_name' => 'BN', 'code' => '+673', 'currency_name' => 'Brunei Dollar', 'currency_symbol' => 'B$'],
                ['name' => 'Bulgaria', 'short_name' => 'BG', 'code' => '+359', 'currency_name' => 'Bulgarian Lev', 'currency_symbol' => 'лв'],
                ['name' => 'Burkina Faso', 'short_name' => 'BF', 'code' => '+226', 'currency_name' => 'West African CFA Franc', 'currency_symbol' => 'CFA'],
                ['name' => 'Burundi', 'short_name' => 'BI', 'code' => '+257', 'currency_name' => 'Burundian Franc', 'currency_symbol' => 'FBu'],
                ['name' => 'Cabo Verde', 'short_name' => 'CV', 'code' => '+238', 'currency_name' => 'Cape Verdean Escudo', 'currency_symbol' => 'Esc'],
                ['name' => 'Cambodia', 'short_name' => 'KH', 'code' => '+855', 'currency_name' => 'Cambodian Riel', 'currency_symbol' => '៛'],
                ['name' => 'Cameroon', 'short_name' => 'CM', 'code' => '+237', 'currency_name' => 'Central African CFA Franc', 'currency_symbol' => 'FCFA'],
                ['name' => 'Canada', 'short_name' => 'CA', 'code' => '+1', 'currency_name' => 'Canadian Dollar', 'currency_symbol' => '$'],
                ['name' => 'Chad', 'short_name' => 'TD', 'code' => '+235', 'currency_name' => 'Central African CFA Franc', 'currency_symbol' => 'FCFA'],
                ['name' => 'China', 'short_name' => 'CN', 'code' => '+86', 'currency_name' => 'Chinese Yuan', 'currency_symbol' => '¥'],
                ['name' => 'Colombia', 'short_name' => 'CO', 'code' => '+57', 'currency_name' => 'Colombian Peso', 'currency_symbol' => '$'],
                ['name' => 'Comoros', 'short_name' => 'KM', 'code' => '+269', 'currency_name' => 'Comorian Franc', 'currency_symbol' => 'CF'],
                ['name' => 'Congo', 'short_name' => 'CG', 'code' => '+242', 'currency_name' => 'Congolese Franc', 'currency_symbol' => 'FC'],
                ['name' => 'Costa Rica', 'short_name' => 'CR', 'code' => '+506', 'currency_name' => 'Costa Rican Colón', 'currency_symbol' => '₡'],
                ['name' => 'Croatia', 'short_name' => 'HR', 'code' => '+385', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
                ['name' => 'Cuba', 'short_name' => 'CU', 'code' => '+53', 'currency_name' => 'Cuban Peso', 'currency_symbol' => '$'],
                ['name' => 'Cyprus', 'short_name' => 'CY', 'code' => '+357', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
                ['name' => 'Czechia', 'short_name' => 'CZ', 'code' => '+420', 'currency_name' => 'Czech Koruna', 'currency_symbol' => 'Kč'],
                ['name' => 'Denmark', 'short_name' => 'DK', 'code' => '+45', 'currency_name' => 'Danish Krone', 'currency_symbol' => 'kr'],
                ['name' => 'Djibouti', 'short_name' => 'DJ', 'code' => '+253', 'currency_name' => 'Djiboutian Franc', 'currency_symbol' => 'Fdj'],
        ['name' => 'Dominica', 'short_name' => 'DM', 'code' => '+1-767', 'currency_name' => 'East Caribbean Dollar', 'currency_symbol' => '$'],
        ['name' => 'Dominican Republic', 'short_name' => 'DO', 'code' => '+1-809', 'currency_name' => 'Dominican Peso', 'currency_symbol' => 'RD$'],
        ['name' => 'Ecuador', 'short_name' => 'EC', 'code' => '+593', 'currency_name' => 'United States Dollar', 'currency_symbol' => '$'],
        ['name' => 'Egypt', 'short_name' => 'EG', 'code' => '+20', 'currency_name' => 'Egyptian Pound', 'currency_symbol' => '£'],
        ['name' => 'El Salvador', 'short_name' => 'SV', 'code' => '+503', 'currency_name' => 'United States Dollar', 'currency_symbol' => '$'],
        ['name' => 'Equatorial Guinea', 'short_name' => 'GQ', 'code' => '+240', 'currency_name' => 'Central African CFA Franc', 'currency_symbol' => 'FCFA'],
        ['name' => 'Eritrea', 'short_name' => 'ER', 'code' => '+291', 'currency_name' => 'Eritrean Nakfa', 'currency_symbol' => 'Nfk'],
        ['name' => 'Estonia', 'short_name' => 'EE', 'code' => '+372', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Eswatini', 'short_name' => 'SZ', 'code' => '+268', 'currency_name' => 'Swazi Lilangeni', 'currency_symbol' => 'E'],
        ['name' => 'Ethiopia', 'short_name' => 'ET', 'code' => '+251', 'currency_name' => 'Ethiopian Birr', 'currency_symbol' => 'Br'],
        ['name' => 'Fiji', 'short_name' => 'FJ', 'code' => '+679', 'currency_name' => 'Fijian Dollar', 'currency_symbol' => '$'],
        ['name' => 'Finland', 'short_name' => 'FI', 'code' => '+358', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'France', 'short_name' => 'FR', 'code' => '+33', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Gabon', 'short_name' => 'GA', 'code' => '+241', 'currency_name' => 'Central African CFA Franc', 'currency_symbol' => 'FCFA'],
        ['name' => 'Gambia', 'short_name' => 'GM', 'code' => '+220', 'currency_name' => 'Gambian Dalasi', 'currency_symbol' => 'D'],
        ['name' => 'Georgia', 'short_name' => 'GE', 'code' => '+995', 'currency_name' => 'Georgian Lari', 'currency_symbol' => '₾'],
        ['name' => 'Germany', 'short_name' => 'DE', 'code' => '+49', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Ghana', 'short_name' => 'GH', 'code' => '+233', 'currency_name' => 'Ghanaian Cedi', 'currency_symbol' => '₵'],
        ['name' => 'Greece', 'short_name' => 'GR', 'code' => '+30', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Grenada', 'short_name' => 'GD', 'code' => '+1-473', 'currency_name' => 'East Caribbean Dollar', 'currency_symbol' => '$'],
        ['name' => 'Guatemala', 'short_name' => 'GT', 'code' => '+502', 'currency_name' => 'Guatemalan Quetzal', 'currency_symbol' => 'Q'],
        ['name' => 'Guinea', 'short_name' => 'GN', 'code' => '+224', 'currency_name' => 'Guinean Franc', 'currency_symbol' => 'FG'],
        ['name' => 'Guinea-Bissau', 'short_name' => 'GW', 'code' => '+245', 'currency_name' => 'West African CFA Franc', 'currency_symbol' => 'CFA'],
        ['name' => 'Guyana', 'short_name' => 'GY', 'code' => '+592', 'currency_name' => 'Guyanese Dollar', 'currency_symbol' => '$'],
        ['name' => 'Haiti', 'short_name' => 'HT', 'code' => '+509', 'currency_name' => 'Haitian Gourde', 'currency_symbol' => 'G'],
        ['name' => 'Honduras', 'short_name' => 'HN', 'code' => '+504', 'currency_name' => 'Honduran Lempira', 'currency_symbol' => 'L'],
        ['name' => 'Hungary', 'short_name' => 'HU', 'code' => '+36', 'currency_name' => 'Hungarian Forint', 'currency_symbol' => 'Ft'],
        ['name' => 'Iceland', 'short_name' => 'IS', 'code' => '+354', 'currency_name' => 'Icelandic Króna', 'currency_symbol' => 'kr'],
        ['name' => 'India', 'short_name' => 'IN', 'code' => '+91', 'currency_name' => 'Indian Rupee', 'currency_symbol' => '₹'],
        ['name' => 'Indonesia', 'short_name' => 'ID', 'code' => '+62', 'currency_name' => 'Indonesian Rupiah', 'currency_symbol' => 'Rp'],
        ['name' => 'Iran', 'short_name' => 'IR', 'code' => '+98', 'currency_name' => 'Iranian Rial', 'currency_symbol' => '﷼'],
        ['name' => 'Iraq', 'short_name' => 'IQ', 'code' => '+964', 'currency_name' => 'Iraqi Dinar', 'currency_symbol' => 'ع.د'],
        ['name' => 'Ireland', 'short_name' => 'IE', 'code' => '+353', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Israel', 'short_name' => 'IL', 'code' => '+972', 'currency_name' => 'Israeli New Shekel', 'currency_symbol' => '₪'],
        ['name' => 'Italy', 'short_name' => 'IT', 'code' => '+39', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Jamaica', 'short_name' => 'JM', 'code' => '+1-876', 'currency_name' => 'Jamaican Dollar', 'currency_symbol' => 'J$'],
        ['name' => 'Japan', 'short_name' => 'JP', 'code' => '+81', 'currency_name' => 'Japanese Yen', 'currency_symbol' => '¥'],
        ['name' => 'Jordan', 'short_name' => 'JO', 'code' => '+962', 'currency_name' => 'Jordanian Dinar', 'currency_symbol' => 'د.ا'],
        ['name' => 'Kazakhstan', 'short_name' => 'KZ', 'code' => '+7', 'currency_name' => 'Kazakhstani Tenge', 'currency_symbol' => '₸'],
        ['name' => 'Kenya', 'short_name' => 'KE', 'code' => '+254', 'currency_name' => 'Kenyan Shilling', 'currency_symbol' => 'KSh'],
        ['name' => 'Kiribati', 'short_name' => 'KI', 'code' => '+686', 'currency_name' => 'Australian Dollar', 'currency_symbol' => 'A$'],
        ['name' => 'Kuwait', 'short_name' => 'KW', 'code' => '+965', 'currency_name' => 'Kuwaiti Dinar', 'currency_symbol' => 'د.ك'],
        ['name' => 'Kyrgyzstan', 'short_name' => 'KG', 'code' => '+996', 'currency_name' => 'Kyrgyzstani Som', 'currency_symbol' => 'сом'],
        ['name' => 'Laos', 'short_name' => 'LA', 'code' => '+856', 'currency_name' => 'Lao Kip', 'currency_symbol' => '₭'],
        ['name' => 'Latvia', 'short_name' => 'LV', 'code' => '+371', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Lebanon', 'short_name' => 'LB', 'code' => '+961', 'currency_name' => 'Lebanese Pound', 'currency_symbol' => 'ل.ل'],
        ['name' => 'Lesotho', 'short_name' => 'LS', 'code' => '+266', 'currency_name' => 'Lesotho Loti', 'currency_symbol' => 'L'],
        ['name' => 'Liberia', 'short_name' => 'LR', 'code' => '+231', 'currency_name' => 'Liberian Dollar', 'currency_symbol' => '$'],
        ['name' => 'Libya', 'short_name' => 'LY', 'code' => '+218', 'currency_name' => 'Libyan Dinar', 'currency_symbol' => 'ل.د'],
        ['name' => 'Liechtenstein', 'short_name' => 'LI', 'code' => '+423', 'currency_name' => 'Swiss Franc', 'currency_symbol' => 'CHF'],
        ['name' => 'Lithuania', 'short_name' => 'LT', 'code' => '+370', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Luxembourg', 'short_name' => 'LU', 'code' => '+352', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Madagascar', 'short_name' => 'MG', 'code' => '+261', 'currency_name' => 'Malagasy Ariary', 'currency_symbol' => 'Ar'],
        ['name' => 'Malawi', 'short_name' => 'MW', 'code' => '+265', 'currency_name' => 'Malawian Kwacha', 'currency_symbol' => 'MK'],
        ['name' => 'Malaysia', 'short_name' => 'MY', 'code' => '+60', 'currency_name' => 'Malaysian Ringgit', 'currency_symbol' => 'RM'],
        ['name' => 'Maldives', 'short_name' => 'MV', 'code' => '+960', 'currency_name' => 'Maldivian Rufiyaa', 'currency_symbol' => 'Rf'],
        ['name' => 'Mali', 'short_name' => 'ML', 'code' => '+223', 'currency_name' => 'West African CFA Franc', 'currency_symbol' => 'CFA'],
        ['name' => 'Malta', 'short_name' => 'MT', 'code' => '+356', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Marshall Islands', 'short_name' => 'MH', 'code' => '+692', 'currency_name' => 'United States Dollar', 'currency_symbol' => '$'],
        ['name' => 'Mauritania', 'short_name' => 'MR', 'code' => '+222', 'currency_name' => 'Mauritanian Ouguiya', 'currency_symbol' => 'UM'],
        ['name' => 'Mauritius', 'short_name' => 'MU', 'code' => '+230', 'currency_name' => 'Mauritian Rupee', 'currency_symbol' => '₨'],
        ['name' => 'Mexico', 'short_name' => 'MX', 'code' => '+52', 'currency_name' => 'Mexican Peso', 'currency_symbol' => '$'],
        ['name' => 'Micronesia', 'short_name' => 'FM', 'code' => '+691', 'currency_name' => 'United States Dollar', 'currency_symbol' => '$'],
        ['name' => 'Moldova', 'short_name' => 'MD', 'code' => '+373', 'currency_name' => 'Moldovan Leu', 'currency_symbol' => 'L'],
        ['name' => 'Monaco', 'short_name' => 'MC', 'code' => '+377', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Mongolia', 'short_name' => 'MN', 'code' => '+976', 'currency_name' => 'Mongolian Tögrög', 'currency_symbol' => '₮'],
        ['name' => 'Montenegro', 'short_name' => 'ME', 'code' => '+382', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Morocco', 'short_name' => 'MA', 'code' => '+212', 'currency_name' => 'Moroccan Dirham', 'currency_symbol' => 'د.م.'],
        ['name' => 'Mozambique', 'short_name' => 'MZ', 'code' => '+258', 'currency_name' => 'Mozambican Metical', 'currency_symbol' => 'MT'],
        ['name' => 'Myanmar', 'short_name' => 'MM', 'code' => '+95', 'currency_name' => 'Burmese Kyat', 'currency_symbol' => 'K'],
        ['name' => 'Namibia', 'short_name' => 'NA', 'code' => '+264', 'currency_name' => 'Namibian Dollar', 'currency_symbol' => '$'],
        ['name' => 'Nauru', 'short_name' => 'NR', 'code' => '+674', 'currency_name' => 'Australian Dollar', 'currency_symbol' => 'A$'],
        ['name' => 'Nepal', 'short_name' => 'NP', 'code' => '+977', 'currency_name' => 'Nepalese Rupee', 'currency_symbol' => '₨'],
        ['name' => 'Netherlands', 'short_name' => 'NL', 'code' => '+31', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'New Zealand', 'short_name' => 'NZ', 'code' => '+64', 'currency_name' => 'New Zealand Dollar', 'currency_symbol' => '$'],
        ['name' => 'Nicaragua', 'short_name' => 'NI', 'code' => '+505', 'currency_name' => 'Nicaraguan Córdoba', 'currency_symbol' => 'C$'],
        ['name' => 'Niger', 'short_name' => 'NE', 'code' => '+227', 'currency_name' => 'West African CFA Franc', 'currency_symbol' => 'CFA'],
        ['name' => 'Nigeria', 'short_name' => 'NG', 'code' => '+234', 'currency_name' => 'Nigerian Naira', 'currency_symbol' => '₦'],
        ['name' => 'North Macedonia', 'short_name' => 'MK', 'code' => '+389', 'currency_name' => 'Macedonian Denar', 'currency_symbol' => 'ден'],
        ['name' => 'Norway', 'short_name' => 'NO', 'code' => '+47', 'currency_name' => 'Norwegian Krone', 'currency_symbol' => 'kr'],
        ['name' => 'Oman', 'short_name' => 'OM', 'code' => '+968', 'currency_name' => 'Omani Rial', 'currency_symbol' => 'ر.ع.'],
        ['name' => 'Pakistan', 'short_name' => 'PK', 'code' => '+92', 'currency_name' => 'Pakistani Rupee', 'currency_symbol' => '₨'],
        ['name' => 'Palau', 'short_name' => 'PW', 'code' => '+680', 'currency_name' => 'United States Dollar', 'currency_symbol' => '$'],
        ['name' => 'Panama', 'short_name' => 'PA', 'code' => '+507', 'currency_name' => 'Panamanian Balboa', 'currency_symbol' => 'B/.'],
        ['name' => 'Papua New Guinea', 'short_name' => 'PG', 'code' => '+675', 'currency_name' => 'Papua New Guinean Kina', 'currency_symbol' => 'K'],
        ['name' => 'Paraguay', 'short_name' => 'PY', 'code' => '+595', 'currency_name' => 'Paraguayan Guaraní', 'currency_symbol' => '₲'],
        ['name' => 'Peru', 'short_name' => 'PE', 'code' => '+51', 'currency_name' => 'Peruvian Sol', 'currency_symbol' => 'S/.'],
        ['name' => 'Philippines', 'short_name' => 'PH', 'code' => '+63', 'currency_name' => 'Philippine Peso', 'currency_symbol' => '₱'],
        ['name' => 'Poland', 'short_name' => 'PL', 'code' => '+48', 'currency_name' => 'Polish Złoty', 'currency_symbol' => 'zł'],
        ['name' => 'Portugal', 'short_name' => 'PT', 'code' => '+351', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Qatar', 'short_name' => 'QA', 'code' => '+974', 'currency_name' => 'Qatari Riyal', 'currency_symbol' => 'ر.ق'],
        ['name' => 'Romania', 'short_name' => 'RO', 'code' => '+40', 'currency_name' => 'Romanian Leu', 'currency_symbol' => 'lei'],
        ['name' => 'Russia', 'short_name' => 'RU', 'code' => '+7', 'currency_name' => 'Russian Ruble', 'currency_symbol' => '₽'],
        ['name' => 'Rwanda', 'short_name' => 'RW', 'code' => '+250', 'currency_name' => 'Rwandan Franc', 'currency_symbol' => 'FRw'],
        ['name' => 'Saint Kitts and Nevis', 'short_name' => 'KN', 'code' => '+1869', 'currency_name' => 'East Caribbean Dollar', 'currency_symbol' => '$'],
        ['name' => 'Saint Lucia', 'short_name' => 'LC', 'code' => '+1758', 'currency_name' => 'East Caribbean Dollar', 'currency_symbol' => '$'],
        ['name' => 'Saint Vincent and the Grenadines', 'short_name' => 'VC', 'code' => '+1784', 'currency_name' => 'East Caribbean Dollar', 'currency_symbol' => '$'],
        ['name' => 'Samoa', 'short_name' => 'WS', 'code' => '+685', 'currency_name' => 'Samoan Tala', 'currency_symbol' => 'T'],
        ['name' => 'San Marino', 'short_name' => 'SM', 'code' => '+378', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Sao Tome and Principe', 'short_name' => 'ST', 'code' => '+239', 'currency_name' => 'São Tomé and Príncipe Dobra', 'currency_symbol' => 'Db'],
        ['name' => 'Saudi Arabia', 'short_name' => 'SA', 'code' => '+966', 'currency_name' => 'Saudi Riyal', 'currency_symbol' => 'ر.س'],
        ['name' => 'Senegal', 'short_name' => 'SN', 'code' => '+221', 'currency_name' => 'West African CFA Franc', 'currency_symbol' => 'CFA'],
        ['name' => 'Serbia', 'short_name' => 'RS', 'code' => '+381', 'currency_name' => 'Serbian Dinar', 'currency_symbol' => 'дин'],
        ['name' => 'Seychelles', 'short_name' => 'SC', 'code' => '+248', 'currency_name' => 'Seychellois Rupee', 'currency_symbol' => '₨'],
        ['name' => 'Sierra Leone', 'short_name' => 'SL', 'code' => '+232', 'currency_name' => 'Sierra Leonean Leone', 'currency_symbol' => 'Le'],
        ['name' => 'Singapore', 'short_name' => 'SG', 'code' => '+65', 'currency_name' => 'Singapore Dollar', 'currency_symbol' => '$'],
        ['name' => 'Slovakia', 'short_name' => 'SK', 'code' => '+421', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Slovenia', 'short_name' => 'SI', 'code' => '+386', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Solomon Islands', 'short_name' => 'SB', 'code' => '+677', 'currency_name' => 'Solomon Islands Dollar', 'currency_symbol' => '$'],
        ['name' => 'Somalia', 'short_name' => 'SO', 'code' => '+252', 'currency_name' => 'Somali Shilling', 'currency_symbol' => 'Sh'],
        ['name' => 'South Africa', 'short_name' => 'ZA', 'code' => '+27', 'currency_name' => 'South African Rand', 'currency_symbol' => 'R'],
        ['name' => 'South Korea', 'short_name' => 'KR', 'code' => '+82', 'currency_name' => 'South Korean Won', 'currency_symbol' => '₩'],
        ['name' => 'South Sudan', 'short_name' => 'SS', 'code' => '+211', 'currency_name' => 'South Sudanese Pound', 'currency_symbol' => '£'],
        ['name' => 'Spain', 'short_name' => 'ES', 'code' => '+34', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Sri Lanka', 'short_name' => 'LK', 'code' => '+94', 'currency_name' => 'Sri Lankan Rupee', 'currency_symbol' => '₨'],
        ['name' => 'Sudan', 'short_name' => 'SD', 'code' => '+249', 'currency_name' => 'Sudanese Pound', 'currency_symbol' => 'ج.س'],
        ['name' => 'Suriname', 'short_name' => 'SR', 'code' => '+597', 'currency_name' => 'Surinamese Dollar', 'currency_symbol' => '$'],
        ['name' => 'Sweden', 'short_name' => 'SE', 'code' => '+46', 'currency_name' => 'Swedish Krona', 'currency_symbol' => 'kr'],
        ['name' => 'Switzerland', 'short_name' => 'CH', 'code' => '+41', 'currency_name' => 'Swiss Franc', 'currency_symbol' => 'CHF'],
        ['name' => 'Syria', 'short_name' => 'SY', 'code' => '+963', 'currency_name' => 'Syrian Pound', 'currency_symbol' => '£S'],
        ['name' => 'Taiwan', 'short_name' => 'TW', 'code' => '+886', 'currency_name' => 'New Taiwan Dollar', 'currency_symbol' => 'NT$'],
        ['name' => 'Tajikistan', 'short_name' => 'TJ', 'code' => '+992', 'currency_name' => 'Tajikistani Somoni', 'currency_symbol' => 'ЅМ'],
        ['name' => 'Tanzania', 'short_name' => 'TZ', 'code' => '+255', 'currency_name' => 'Tanzanian Shilling', 'currency_symbol' => 'TSh'],
        ['name' => 'Thailand', 'short_name' => 'TH', 'code' => '+66', 'currency_name' => 'Thai Baht', 'currency_symbol' => '฿'],
        ['name' => 'Timor-Leste', 'short_name' => 'TL', 'code' => '+670', 'currency_name' => 'United States Dollar', 'currency_symbol' => '$'],
        ['name' => 'Togo', 'short_name' => 'TG', 'code' => '+228', 'currency_name' => 'West African CFA Franc', 'currency_symbol' => 'CFA'],
        ['name' => 'Tonga', 'short_name' => 'TO', 'code' => '+676', 'currency_name' => 'Tongan Paʻanga', 'currency_symbol' => 'T$'],
        ['name' => 'Trinidad and Tobago', 'short_name' => 'TT', 'code' => '+1868', 'currency_name' => 'Trinidad and Tobago Dollar', 'currency_symbol' => 'TT$'],
        ['name' => 'Tunisia', 'short_name' => 'TN', 'code' => '+216', 'currency_name' => 'Tunisian Dinar', 'currency_symbol' => 'د.ت'],
        ['name' => 'Turkey', 'short_name' => 'TR', 'code' => '+90', 'currency_name' => 'Turkish Lira', 'currency_symbol' => '₺'],
        ['name' => 'Turkmenistan', 'short_name' => 'TM', 'code' => '+993', 'currency_name' => 'Turkmenistani Manat', 'currency_symbol' => 'T'],
        ['name' => 'Tuvalu', 'short_name' => 'TV', 'code' => '+688', 'currency_name' => 'Australian Dollar', 'currency_symbol' => 'A$'],
        ['name' => 'Uganda', 'short_name' => 'UG', 'code' => '+256', 'currency_name' => 'Ugandan Shilling', 'currency_symbol' => 'USh'],
        ['name' => 'Ukraine', 'short_name' => 'UA', 'code' => '+380', 'currency_name' => 'Ukrainian Hryvnia', 'currency_symbol' => '₴'],
        ['name' => 'United Arab Emirates', 'short_name' => 'AE', 'code' => '+971', 'currency_name' => 'UAE Dirham', 'currency_symbol' => 'د.إ'],
        ['name' => 'United Kingdom', 'short_name' => 'GB', 'code' => '+44', 'currency_name' => 'British Pound Sterling', 'currency_symbol' => '£'],
        ['name' => 'United States', 'short_name' => 'US', 'code' => '+1', 'currency_name' => 'United States Dollar', 'currency_symbol' => '$'],
        ['name' => 'Uruguay', 'short_name' => 'UY', 'code' => '+598', 'currency_name' => 'Uruguayan Peso', 'currency_symbol' => '$'],
        ['name' => 'Uzbekistan', 'short_name' => 'UZ', 'code' => '+998', 'currency_name' => 'Uzbekistani Som', 'currency_symbol' => 'лв'],
        ['name' => 'Vanuatu', 'short_name' => 'VU', 'code' => '+678', 'currency_name' => 'Vanuatu Vatu', 'currency_symbol' => 'Vt'],
        ['name' => 'Vatican City', 'short_name' => 'VA', 'code' => '+379', 'currency_name' => 'Euro', 'currency_symbol' => '€'],
        ['name' => 'Venezuela', 'short_name' => 'VE', 'code' => '+58', 'currency_name' => 'Venezuelan Bolívar', 'currency_symbol' => 'Bs.'],
        ['name' => 'Vietnam', 'short_name' => 'VN', 'code' => '+84', 'currency_name' => 'Vietnamese Dong', 'currency_symbol' => '₫'],
        ['name' => 'Yemen', 'short_name' => 'YE', 'code' => '+967', 'currency_name' => 'Yemeni Rial', 'currency_symbol' => '﷼'],
        ['name' => 'Zambia', 'short_name' => 'ZM', 'code' => '+260', 'currency_name' => 'Zambian Kwacha', 'currency_symbol' => 'ZK'],
        ['name' => 'Zimbabwe', 'short_name' => 'ZW', 'code' => '+263', 'currency_name' => 'Zimbabwean Dollar', 'currency_symbol' => '$'],
        
        ];

            foreach ($countries as $country) {
                Country::updateOrCreate(
                    ['name' => $country['name']],
                    [
                        'short_name' => $country['short_name'],
                        'code' => $country['code'],
                        'currency_name' => $country['currency_name'],
                        'currency_symbol' => $country['currency_symbol'],
                    ]
                );
            }
        }
    }
