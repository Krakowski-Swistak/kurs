<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swistak-kurs
 */

?>

<header id="masthead" class="sticky z-20 top-0 w-full bg-white">
	<div class="container h-18 md:h-24 py-3 flex justify-between items-center">
		<div>
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="block">
				<svg xmlns="http://www.w3.org/2000/svg" width="140" height="44" viewBox="0 0 1000 310" fill="none">
					<path d="M782.997 43.8487L773.518 44.6752C772.868 41.9792 771.547 39.8768 769.559 38.3676C767.569 36.8584 765.055 36.2368 762.011 36.5019C759.493 36.7215 757.603 37.5133 756.34 38.8771C755.074 40.2418 754.532 41.986 754.718 44.1107C754.857 45.6895 755.469 46.9205 756.547 47.8049C757.629 48.6895 758.936 49.3404 760.476 49.7565C762.017 50.1732 764.194 50.5946 767 51.0237C770.702 51.5571 773.721 52.1812 776.052 52.8956C778.387 53.61 780.444 54.8833 782.227 56.7165C784.009 58.5489 785.048 61.1654 785.346 64.5643C785.714 68.7534 784.477 72.2861 781.633 75.1645C778.794 78.0422 774.767 79.7086 769.56 80.1623C763.535 80.6874 758.535 79.6551 754.562 77.0651C750.591 74.4748 747.997 70.6021 746.776 65.4481L756.519 64.5992C757.05 67.3052 758.416 69.4192 760.613 70.9408C762.813 72.4614 765.577 73.0769 768.912 72.7862C771.313 72.5774 773.143 71.7602 774.399 70.336C775.661 68.9103 776.205 67.1961 776.029 65.193C775.874 63.4324 775.223 62.0824 774.081 61.1414C772.936 60.2014 771.548 59.5116 769.917 59.0732C768.286 58.6341 766.071 58.2305 763.27 57.8633C759.681 57.3196 756.756 56.7182 754.489 56.0594C752.217 55.4007 750.224 54.1828 748.505 52.4053C746.786 50.6286 745.785 48.1011 745.497 44.8229C745.123 40.5735 746.357 36.9944 749.198 34.0857C752.035 31.1778 756.177 29.4869 761.618 29.013C767.292 28.5181 771.974 29.6237 775.661 32.3307C779.348 35.0375 781.792 38.8771 782.997 43.8487V43.8487ZM636.901 39.8799C641.582 39.4724 645.886 40.1365 649.811 41.8747C653.737 43.6129 656.924 46.3321 659.372 50.0341C661.819 53.7353 663.273 58.1964 663.731 63.417C664.195 68.6984 663.544 73.3739 661.779 77.4423C660.014 81.5107 657.35 84.741 653.786 87.1311C650.224 89.5216 646.101 90.9202 641.42 91.3285C636.739 91.736 632.45 91.0703 628.554 89.329C624.657 87.5894 621.469 84.8548 618.988 81.125C616.509 77.3959 615.04 72.9207 614.581 67.7003C614.123 62.4791 614.791 57.8338 616.585 53.7623C618.38 49.6907 621.044 46.4612 624.578 44.0729C628.112 41.6852 632.22 40.2881 636.901 39.8799V39.8799ZM560.969 97.6964L550.964 98.5685L549.94 86.913C548.978 90.7278 547.045 93.8939 544.142 96.4099C541.238 98.9265 537.591 100.376 533.203 100.758C528.99 101.125 525.14 100.421 521.652 98.6443C518.165 96.8692 515.315 94.1197 513.102 90.3984C510.888 86.6764 509.549 82.1741 509.085 76.8927C508.626 71.6721 509.163 67.0377 510.694 62.9894C512.225 58.941 514.552 55.7408 517.677 53.3888C520.802 51.0361 524.471 49.6776 528.684 49.3104C533.072 48.9275 536.915 49.724 540.214 51.7002C543.512 53.6765 545.968 56.4599 547.58 60.0505L546.556 48.395L556.562 47.5228L560.969 97.6964V97.6964ZM434.584 108.71L424.579 109.582L418.932 45.2937L428.937 44.4216L431.521 73.8339L453.512 42.2807L465.624 41.2252L441.119 75.3833L470.579 105.384L458.379 106.447L431.969 78.9329L434.584 108.71V108.71ZM852.795 72.2675L842.789 73.1387L838.382 22.9652L848.387 22.0938L852.795 72.2675ZM502.802 62.759L499.818 63.0195L499.716 63.0288C498.305 63.1601 496.904 63.3999 495.546 63.805C493.749 64.3424 492.036 65.1728 490.568 66.3442C490.06 66.75 489.575 67.1924 489.143 67.6778C488.761 68.1063 488.42 68.571 488.124 69.061C487.569 69.9788 487.172 70.984 486.903 72.0193C486.347 74.1556 486.317 76.3978 486.504 78.5859L488.736 103.991L478.731 104.863L474.323 54.6893L484.328 53.8171L485.192 63.6511C486.543 60.2307 488.655 57.4318 491.531 55.2545C494.405 53.0765 497.832 51.8147 501.811 51.4683L502.802 62.759V62.759ZM582.998 95.7766L572.993 96.6487L567.074 29.265L577.08 28.3929L580.471 67.0022L595.794 44.1046L607.818 43.0562L588.945 69.8421L612.185 93.0969L599.811 94.1754L581.039 73.4666L582.998 95.7766V95.7766ZM806.542 76.2979L796.537 77.1693L790.618 9.78565L800.623 8.91424L804.015 47.5228L819.337 24.6252L831.361 23.5775L812.489 50.3627L836.297 73.7047L823.919 74.7834C817.475 67.8512 811.031 60.9195 804.582 53.988L806.542 76.2979V76.2979ZM694.815 86.0338L683.844 86.9895L666.008 37.9857L676.101 37.1065L688.884 76.9159L697.428 35.2479L707.961 34.3301L723.815 73.8717L729.464 32.4567L738.944 31.6302L729.922 82.9745L718.863 83.9377C713.748 71.3544 708.633 58.7709 703.519 46.1868L694.815 86.0338V86.0338ZM637.693 48.8951C635.118 49.1194 632.802 49.9327 630.744 51.3352C628.686 52.7386 627.108 54.7566 626.013 57.3901C624.918 60.0251 624.531 63.1633 624.851 66.805C625.176 70.5077 626.106 73.547 627.641 75.9214C629.176 78.2959 631.08 79.9945 633.351 81.0214C635.623 82.0466 638.046 82.4471 640.62 82.222C643.194 81.9979 645.512 81.1845 647.57 79.7819C649.628 78.3787 651.206 76.3761 652.304 73.7721C653.402 71.1688 653.788 68.015 653.463 64.3123C653.142 60.6699 652.214 57.646 650.676 55.2413C649.139 52.8368 647.233 51.1218 644.962 50.0966C642.691 49.0706 640.267 48.6709 637.693 48.8951V48.8951ZM532.555 58.1485C528.109 58.5359 524.683 60.3173 522.28 63.4934C519.876 66.6697 518.901 70.8378 519.354 75.9981C519.807 81.1582 521.494 85.0945 524.415 87.8067C527.336 90.519 531.02 91.681 535.467 91.2938C538.276 91.0486 540.732 90.1464 542.835 88.5868C544.939 87.0273 546.524 84.9468 547.593 82.3458C548.661 79.7448 549.05 76.7743 548.756 73.4356C548.468 70.1582 547.57 67.3152 546.062 64.9083C544.553 62.5007 542.627 60.7117 540.284 59.5395C537.94 58.3673 535.364 57.9034 532.555 58.1485V58.1485ZM835.699 8.51845C835.545 6.75784 836 5.25014 837.071 3.99463C838.137 2.73967 839.637 2.02767 841.568 1.85899C843.501 1.6905 845.118 2.13122 846.416 3.17965C847.718 4.22956 848.444 5.63371 848.599 7.39414C848.753 9.15475 848.28 10.6339 847.176 11.8307C846.075 13.0276 844.557 13.7103 842.624 13.8788C840.693 14.0465 839.094 13.6361 837.83 12.6448C836.563 11.6544 835.854 10.2789 835.699 8.51845V8.51845Z" fill="#10B3A6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M455.789 143.974L420.473 147.052C419.472 141.311 416.952 138.617 412.914 138.969C411.535 139.089 410.44 139.626 409.631 140.582C408.821 141.537 408.494 142.892 408.648 144.648C408.856 147.024 410.283 148.85 412.926 150.129C415.57 151.408 419.637 152.796 425.13 154.295C432.046 156.19 437.802 158.16 442.399 160.206C446.996 162.251 451.151 165.479 454.864 169.89C458.576 174.302 460.755 180.174 461.399 187.507C461.953 193.808 460.901 199.623 458.242 204.954C455.583 210.285 451.428 214.68 445.776 218.138C440.123 221.597 433.21 223.683 425.034 224.395C412.523 225.485 401.934 223.311 393.267 217.875C384.6 212.438 379.4 203.81 377.667 191.993L412.54 188.955C413.586 195.212 416.522 198.131 421.349 197.71C423.024 197.564 424.337 196.981 425.29 195.961C426.243 194.941 426.642 193.554 426.488 191.798C426.261 189.216 424.826 187.286 422.183 186.007C419.539 184.729 415.323 183.352 409.536 181.879C402.736 180.182 397.04 178.337 392.448 176.344C387.855 174.351 383.73 171.172 380.071 166.807C376.411 162.443 374.256 156.542 373.602 149.106C372.976 141.98 374.192 135.76 377.249 130.447C380.306 125.133 384.751 120.921 390.582 117.811C396.414 114.701 403.122 112.815 410.707 112.154C423.219 111.064 433.435 113.245 441.359 118.694C449.282 124.143 454.092 132.57 455.789 143.974V143.974Z" fill="#10B3A6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M524.898 214.687L487.958 217.906L460.63 132.244L493.137 129.411L504.75 181.943L510.87 127.867L545.89 124.815L561.989 177.58L564.36 123.205L594.652 120.566L582.526 209.665L545.585 212.885C540.794 196.755 536.002 180.625 531.21 164.496L524.898 214.687V214.687Z" fill="#10B3A6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M641.935 204.448L609.13 207.307L601.455 119.932L634.26 117.073L641.935 204.448Z" fill="#10B3A6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M724.443 139.654L693.857 142.32C692.14 137.474 688.573 135.287 683.156 135.759C680.101 136.025 678.683 137.398 678.901 139.876C679.055 141.632 680.281 142.878 682.58 143.615C684.878 144.351 688.485 145.025 693.403 145.638C699.817 146.328 705.339 147.329 709.971 148.643C714.603 149.956 718.712 152.382 722.299 155.92C725.885 159.458 727.969 164.532 728.549 171.142C729.003 176.306 728.028 181.022 725.624 185.29C723.219 189.559 719.457 193.061 714.336 195.796C709.216 198.532 703.061 200.213 695.87 200.84C683.852 201.887 674.06 200.035 666.496 195.282C658.931 190.53 653.868 183.166 651.304 173.19L682.778 170.448C683.813 175.457 687.434 177.691 693.64 177.15C696.99 176.858 698.555 175.473 698.337 172.994C698.165 171.032 696.905 169.685 694.558 168.952C692.21 168.221 688.483 167.609 683.379 167.117C676.857 166.332 671.436 165.347 667.113 164.163C662.79 162.979 658.89 160.665 655.41 157.222C651.932 153.778 649.906 148.803 649.335 142.296C648.872 137.03 649.788 132.214 652.085 127.852C654.383 123.489 658.037 119.891 663.05 117.061C668.062 114.231 674.312 112.49 681.798 111.837C693.127 110.85 702.417 112.929 709.668 118.072C716.92 123.217 721.845 130.41 724.443 139.654V139.654Z" fill="#10B3A6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M772.73 105.012L786.324 103.828L788.841 132.487L775.247 133.672L777.315 157.219C777.381 157.944 777.497 158.667 777.719 159.362C777.872 159.841 778.077 160.308 778.354 160.73C778.531 160.999 778.737 161.248 778.974 161.467C780.044 162.458 781.608 162.658 783.011 162.628C783.271 162.622 783.531 162.608 783.79 162.588L791.723 161.896L794.295 191.176L781.882 192.258C759.028 194.249 746.553 183.316 744.457 159.458L742.443 136.531L732.099 137.432L729.582 108.772L739.926 107.871L738.075 86.801L770.878 83.9426L772.73 105.012V105.012Z" fill="#10B3A6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M940.003 178.478L907.202 181.337L897.132 66.696L929.933 63.8376L935.199 123.792L953.167 89.2882L991.289 85.9659L963.973 132.68L999.702 173.277L960.542 176.688C952.679 165.666 944.81 154.644 936.941 143.621L940.003 178.478V178.478Z" fill="#10B3A6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M892.474 182.644L859.817 185.49L858.769 173.561C857.054 177.769 854.329 181.207 850.59 183.874C846.856 186.542 842.278 188.111 836.86 188.583C830.357 189.15 824.338 187.879 818.807 184.77C813.272 181.662 808.705 176.856 805.107 170.353C801.508 163.851 799.305 156.004 798.497 146.811C797.69 137.62 798.492 129.51 800.902 122.483C803.312 115.457 806.971 109.934 811.881 105.917C816.785 101.899 822.491 99.6061 828.994 99.0394C834.413 98.5677 839.195 99.3215 843.337 101.302C847.484 103.282 850.767 106.197 853.189 110.044L852.142 98.1153L884.799 95.2693L892.474 182.644V182.644ZM842.569 128.141C839.024 128.45 836.232 129.994 834.188 132.774C832.149 135.553 831.336 139.267 831.745 143.914C832.153 148.562 833.601 152.078 836.093 154.463C838.591 156.847 841.61 157.884 845.155 157.576C848.7 157.266 851.492 155.723 853.531 152.943C855.57 150.164 856.388 146.45 855.979 141.802C855.571 137.155 854.119 133.639 851.626 131.254C849.133 128.87 846.114 127.832 842.569 128.141H842.569Z" fill="#10B3A6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M601.513 96.5312C601.192 92.8678 602.199 89.7218 604.537 87.0961C606.874 84.4696 610.153 82.9719 614.376 82.604C618.526 82.2421 621.982 83.1529 624.741 85.3347C627.5 87.5175 629.041 90.4408 629.363 94.1049C629.678 97.6932 628.666 100.781 626.325 103.369C623.984 105.957 620.74 107.432 616.589 107.794C612.366 108.162 608.877 107.274 606.121 105.13C603.364 102.986 601.829 100.119 601.513 96.5312V96.5312Z" fill="#10B3A6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M430.076 91.7927L393.084 109.69L391.07 86.7625L427.844 66.3863L430.076 91.7927Z" fill="#10B3A6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M142.357 0.721613C227.719 -6.71626 303.086 56.2703 310.553 141.291C318.022 226.311 254.781 301.376 169.42 308.815C84.058 316.253 8.69135 253.266 1.22266 168.245C-6.24509 83.2246 56.9947 8.16023 142.357 0.721613V0.721613Z" fill="#10B3A6" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M183.009 68.6008L174.329 64.7186L148.638 69.677C148.515 69.6754 148.309 69.6724 148.031 69.6685L122.979 69.0244L113.96 74.8618L101.692 66.3314L83.5979 80.1086L83.8315 112.584L91.8108 119.253L69.8055 173.703L85.953 235.503L117.49 251.22L139.648 240.744L163.93 245.776L186.962 236.487L211.445 242.966L238.846 221.288L243.805 158.379L212.139 108.749L218.823 100.514L213.45 68.8071L192.974 58.3632L183.009 68.6006V68.6008ZM123.206 214.538L107.337 177.508L91.0602 229.384L91.4917 231.035L117.756 244.126L132.664 236.611L123.252 214.646L123.17 214.592L123.206 214.538V214.538ZM193.248 231.205L209.801 236.013L232.597 217.976L232.772 215.753L209.864 168.411L193.248 231.205V231.205ZM157.401 179.322L159.851 207.21C159.883 207.572 159.628 207.896 159.269 207.953L146.528 209.976C146.163 210.034 145.817 209.796 145.74 209.435L141.321 188.57L126.871 214.859L135.667 235.385L138.923 234.054L163.329 239.108L186.473 229.777L190.07 230.535L196.49 206.275L178.241 185.251L177.923 206.623C177.918 206.997 177.615 207.298 177.239 207.304L164.703 207.477C164.339 207.482 164.033 207.207 164.002 206.846L161.563 179.081L159.211 178.77L157.401 179.322V179.322ZM76.9793 175.495L89.6744 224.08L104.979 174.656L76.9793 175.495ZM211.885 165.438L233.219 210.08L237.07 161.233L237.082 161.089L211.885 165.438V165.438ZM125.339 211.285L141.326 182.653L109.829 175.089L125.339 211.285V211.285ZM177.032 179.534L197.442 202.675L206.911 166.89L177.032 179.534V179.534ZM110.303 171.885L144.241 179.967L157.343 175.961L156.05 161.246L144.71 152.366L131.914 145.883L110.303 171.885V171.885ZM168.964 150.215L159.283 160.963L160.576 175.69L173.607 177.406L206.231 163.683L180.761 141.386L168.964 150.215V150.215ZM207.235 116.633L192.971 122.683L210.283 162.421L235.537 158.062L225.802 144.784L207.733 117.196L207.235 116.633V116.633ZM84.5154 158.128L77.7143 172.232L105.976 171.385L114.984 129.537L109.696 128.213L99.0101 126.472L84.5154 158.128ZM110.269 166.858L129.55 143.659L117.905 131.379L110.269 166.858V166.858ZM182.597 138.691L204.922 158.235L190.532 125.204L182.597 138.691ZM119.622 128.482L131.517 141.026C131.653 140.903 131.809 140.804 131.979 140.733L141.22 135.885C141.302 135.852 141.386 135.824 141.471 135.804L153.736 132.881L151.418 110.758L119.622 128.482ZM154.662 110.577L156.973 132.638L169.589 133.294C169.674 133.299 169.758 133.309 169.84 133.326L179.804 136.301C179.931 136.328 180.054 136.37 180.17 136.425L188.346 122.527L154.662 110.577ZM113.512 82.8605L105.025 104.427L110.256 104.32C110.986 104.305 111.637 104.778 111.845 105.476L117.883 125.74L151.056 107.304L149.354 91.0523L115.365 81.6606L113.512 82.8605V82.8605ZM152.617 91.0515L154.294 107.066L189.298 119.438L190.623 98.6989C190.637 98.4833 190.693 98.2806 190.782 98.0975C190.988 97.5755 191.46 97.1843 192.041 97.0938L196.723 96.3664L184.955 76.5567L183.395 75.8586L152.617 91.0515V91.0515ZM90.7651 109.942L94.617 113.161L98.6451 102.926L90.7651 109.942ZM203.066 94.3545L208.311 103.185L211.51 99.2441L203.066 94.3545ZM103.881 89.6212L101.03 74.9726L90.1108 83.2858L90.2738 106.049L101.26 96.2797L103.881 89.6212ZM195.264 81.2182L199.682 88.657L211.38 95.4308L207.593 73.0821L195.256 66.7893L195.264 81.2182V81.2182ZM151.02 75.8145L152.26 87.6572L179.465 74.1012L173.51 71.4384L151.02 75.8145ZM119.088 79.2513L148.996 87.634L147.791 76.1292L124.862 75.5146L119.088 79.2513V79.2513ZM106.093 84.0017L108.172 78.7195L104.578 76.2205L106.093 84.0017ZM189.391 71.331L190.015 72.3825L192.016 75.7512L192.013 68.6364L189.391 71.331V71.331Z" fill="white" />
				</svg>
				<?php file_get_contents(get_stylesheet_directory_uri() . '/assets/img/logo.svg'); ?>
			</a>
		</div>
		<button class="menu-btn w-[35px] h-[31px] md:hidden z-20" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_html_e('Primary Menu', 'swistak-kurs'); ?>" data-js="nav-toggle">
			<div class="ks-menu-toggler__line w-[35px] h-[3px] rounded-full bg-primary origin-left transition duration-300 mb-[9px]"></div>
			<div class="ks-menu-toggler__line w-[35px] h-[3px] rounded-full bg-primary origin-left transition duration-300 mb-[9px]"></div>
			<div class="ks-menu-toggler__line w-[35px] h-[3px] rounded-full bg-primary origin-left transition duration-300"></div>
		</button>

		<div id="site-navigation" class="absolute nav-primary md:static inset-x-0 top-full opacity-0 md:opacity-100 h-0 md:h-auto overflow-hidden bg-white shadow-none transition-all duration-500" data-js="nav-container">
			<nav class="container flex flex-col md:flex-row md:items-center gap-4 md:gap-10 text-lg" aria-label="<?php esc_attr_e('Main Navigation', 'swistak-kurs'); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
	</div>



</header><!-- #masthead -->