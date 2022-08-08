<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>SILOE | Facture</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 10px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 0px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}


		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table id>
							<tr>
								<td class="title">
									<img src="{{public_path('theme/logo/SiloeLogo.png')}}" style="width: 120px; max-width: 200px" />
								</td>

								<td style="font-size: 1.5em">
									CLINIQUE MEDICALE SILOE SARL
								</td>
							</tr>
						</table>
					</td>
				</tr>

                <tr> <td colspan="2" style="text-align:right ; margin-bottom: 10px">
                    {{$dateSansHeure}}
                </td> </tr>

                <tr>
                    <td colspan="2" style="text-align: center; margin-bottom: 10px">FACTURE N° 00000{{$factureAImprimer->id}}</td>
                </tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>NOM ET PRENOM : {{$factureAImprimer->nomPrenom}}</td>
								<td>N° DOSSIER : {{$factureAImprimer->numeroDossier}}</td>
							</tr>
							<tr>
								<td>MATRICULE : {{$factureAImprimer->matricule}}</td>
								<td></td>
							</tr>
							<tr >
								<td style="padding-bottom: 10px">OBJET : {{$factureAImprimer->objet}}</td>
								<td></td>
							</tr>
						</table>
					</td>
				</tr>



				<tr class="heading">
					<td>DESIGNATION</td>
					<td>PRIX</td>
				</tr>

				<tr class="item">
					<td>CONSULTATION</td>
					<td>{{$factureAImprimer->consultation}}</td>
				</tr>

				<tr class="item">
					<td>SEJOUR</td>
					<td>{{$factureAImprimer->sejour}}</td>
				</tr>

				<tr class="item last">
					<td>AMI</td>
					<td>{{$factureAImprimer->ami}}</td>
				</tr>

				<tr class="total">
					<td></td>
					<td>Total: {{$factureAImprimer->montantTotal}}</td>
				</tr>
			</table>
            <h4>La présente facture à la somme de :<br/> {{$montantEnLettre}} f cfa</h4>

            <table id="remise">
                <tr ><td style="border: 1px solid;">REMISE</td><td style="border: 1px solid;">0</td></tr>
                <tr><td style="border: 1px solid;">NET A PAYER</td><td style="border: 1px solid;">{{$factureAImprimer->montantTotal}} FCFA</td></tr>
            </table>

            <table>
                <tr><td colspan="2" style="text-align:right ; margin-bottom: 10px; ; padding-top: 50px">DIRECTEUR</td></tr>
            </table>

            <table cellpadding="0" cellspacing="0" style="margin-top: 90px; padding: 0; border-spacing: 0;">
                <tr><td style="text-align: center; font-size: 0.7em">Sarl au capital de 1 000 000 de FCFA, YOPOUGON SIDECI Terminus de bus 42, 01 BP 1613 ABIDJAN 01 - Fax : 27 23 45 61 74 <br/>
                Tel : 27 23 52 00 09 / 05 45 30 50 07 <br/>
                RCCM : 2012-81510 / CC:141260G ECOBANK : 01039 120208019001-36 </td></tr>
            </table>
		</div>
	</body>
</html>
