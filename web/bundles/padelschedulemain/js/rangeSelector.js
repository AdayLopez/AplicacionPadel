function GetHexValue(strRGBColor)
{
    var aryRGBValues;
    var strR;
    var strG;
    var strB;
    var strHexValue;

    strRGBColor = strRGBColor.replace(/\s*/g, '');
    strRGBColor = strRGBColor.replace(/rgb\(|\)/g, '');
    aryRGBValues = strRGBColor.split(',');
    strR = aryRGBValues[0];
    strG = aryRGBValues[1];
    strB = aryRGBValues[2];
    strHexValue = '#' + RGBtoHex(strR, strG, strB);
    return strHexValue.toLowerCase();
}

function RGBtoHex(strR, strG, strB)
{
    var intR = strR * 1;
    var intG = strG * 1;
    var intB = strB * 1;
    return intR.toString(16) + intG.toString(16) + intB.toString(16);
}

function ToggleTimeslot(tdTimeslot)
{
 
    tdTimeslot.addClass('selected')

}

function GetTimeSlotValue(intTimeslot, strStartOrEnd)
{
    var strTimeslot;

    switch (intTimeslot)
    {
        case 1:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '8:30';
            }
            else
            {
                strTimeslot = '9:00';
            }
            break;
        case 2:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '9:00';
            }
            else
            {
                strTimeslot = '9:30';
            }
            break;
        case 3:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '9:30';
            }
            else
            {
                strTimeslot = '10:00';
            }
            break;
        case 4:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '10:00';
            }
            else
            {
                strTimeslot = '10:30';
            }
            break;
        case 5:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '10:30';
            }
            else
            {
                strTimeslot = '11:00';
            }
            break;
        case 6:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '11:00';
            }
            else
            {
                strTimeslot = '11:30';
            }
            break;
        case 7:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '11:30';
            }
            else
            {
                strTimeslot = '12:00';
            }
            break;
        case 8:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '12:00';
            }
            else
            {
                strTimeslot = '12:30';
            }
            break;
        case 9:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '12:30';
            }
            else
            {
                strTimeslot = '13:00';
            }
            break;
        case 10:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '13:00';
            }
            else
            {
                strTimeslot = '13:30';
            }
            break;
        case 11:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '13:30';
            }
            else
            {
                strTimeslot = '14:00';
            }
            break;
        case 12:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '14:00';
            }
            else
            {
                strTimeslot = '14:30';
            }
            break;
        case 13:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '14:30';
            }
            else
            {
                strTimeslot = '15:00';
            }
            break;
        case 14:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '15:00';
            }
            else
            {
                strTimeslot = '15:30';
            }
            break;
        case 15:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '15:30';
            }
            else
            {
                strTimeslot = '16:00';
            }
            break;
        case 16:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '16:00';
            }
            else
            {
                strTimeslot = '16:30';
            }
            break;
        case 17:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '16:30';
            }
            else
            {
                strTimeslot = '17:00';
            }
            break;
        case 18:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '17:00';
            }
            else
            {
                strTimeslot = '17:30';
            }
            break;
        case 19:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '17:30';
            }
            else
            {
                strTimeslot = '18:00';
            }
            break;
        case 20:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '18:00';
            }
            else
            {
                strTimeslot = '18:30';
            }
            break;
        case 21:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '18:30';
            }
            else
            {
                strTimeslot = '19:00';
            }
            break;
        case 22:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '19:00';
            }
            else
            {
                strTimeslot = '19:30';
            }
            break;
        case 23:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '19:30';
            }
            else
            {
                strTimeslot = '20:00';
            }
            break;
        case 24:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '20:00';
            }
            else
            {
                strTimeslot = '20:30';
            }
            break;
        case 25:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '20:30';
            }
            else
            {
                strTimeslot = '21:00';
            }
            break;
        case 26:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '21:00';
            }
            else
            {
                strTimeslot = '21:30';
            }
            break;
        case 27:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '21:30';
            }
            else
            {
                strTimeslot = '22:00';
            }
            break;
        case 28:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '22:00';
            }
            else
            {
                strTimeslot = '22:30';
            }
            break;
        case 29:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '22:30';
            }
            else
            {
                strTimeslot = '23:00';
            }
            break;
        case 30:
            if (strStartOrEnd == 'start')
            {
                strTimeslot = '23:00';
            }
            else
            {
                strTimeslot = '23:30';
            }
            break;       
        default:
            strTimeslot = '';
    }
    return strTimeslot;
}

function GetSelectedTimeslots(strDay)
{
    var strTimeslots = '';
    var intLastSelectedTimeslot = -1;
    var intCounter;
    var intNumOfTimeslots = 30;

    intCounter = 1;
    while (intCounter <= intNumOfTimeslots)
    {
        if($('#td'+strDay+intCounter).hasClass('selected'))
        {
            if (intCounter != (intLastSelectedTimeslot + 1))
            {
                strTimeslots = strTimeslots + GetTimeSlotValue(intCounter, 'start');
            }
            intLastSelectedTimeslot = intCounter;
        }
        else
        {
            if (intCounter == (intLastSelectedTimeslot + 1))
            {
                strTimeslots = strTimeslots + '-' + GetTimeSlotValue(intLastSelectedTimeslot, 'end') + ', ';
            }
        }
        intCounter++
    }
    if (intLastSelectedTimeslot == intNumOfTimeslots)
    {
        strTimeslots = strTimeslots + '-' + GetTimeSlotValue(intLastSelectedTimeslot, 'end') + ', ';
    }
    strTimeslots = strTimeslots.substr(0, (strTimeslots.length - 2));
    if (strTimeslots == '-')
    {
        strTimeslots = '';
    }
    return strTimeslots;
}

$(document).ready(function() {
    $( '#verSeleccion' ).click(function() {
        var strMessage = 'Hola';

        strMessage = 'The following timeslots have been selected:' + '\n\n';
        strMessage = strMessage + 'Lunes: ' + GetSelectedTimeslots('PL') + '\n';
        strMessage = strMessage + 'Martes: ' + GetSelectedTimeslots('PM') + '\n';
        strMessage = strMessage + 'Miércoles: ' + GetSelectedTimeslots('PX') + '\n';
        strMessage = strMessage + 'Jueves: ' + GetSelectedTimeslots('PJ') + '\n';
        strMessage = strMessage + 'Viernes: ' + GetSelectedTimeslots('PV') + '\n';
        strMessage = strMessage + 'Sábado: ' + GetSelectedTimeslots('PS') + '\n';
        strMessage = strMessage + 'Domingo: ' + GetSelectedTimeslots('PD');
        alert(strMessage);

    });
    
      
    
    $(".block-tools > .shade-btn").click(function() {
			var $this = $(this);	
			
			if (!$this.hasClass("active")) {
				$this.siblings().removeClass("active");
				$this.addClass("active");	
			}
		});
     
    $( ".sel-table" ).selectable({
        filter: ".seleccionable",
        selected: function( event, ui ) {
            if ($(this).prev().children(".block-shade").hasClass("active")) {
                $(ui.selected).addClass('selected');
            }else{
                $(ui.selected).removeClass('selected');
            }
        }
        
    });
    
    $('#horarioFormRecurso').submit(function() {
        var $this = $(this);        
        $this.children('.horarioLunesCampo').val(GetSelectedTimeslots('RL'));
        $this.children('.horarioMartesCampo').val(GetSelectedTimeslots('RM'));
        $this.children('.horarioMiercolesCampo').val(GetSelectedTimeslots('RX'));
        $this.children('.horarioJuevesCampo').val(GetSelectedTimeslots('RJ'));
        $this.children('.horarioViernesCampo').val(GetSelectedTimeslots('RV'));
        $this.children('.horarioSabadoCampo').val(GetSelectedTimeslots('RS'));
        $this.children('.horarioDomingoCampo').val(GetSelectedTimeslots('RD'));        
    });
    
    $('#horarioFormPreferencia').submit(function() {
        var $this = $(this);        
        $this.children('.horarioLunesCampo').val(GetSelectedTimeslots('PL'));
        $this.children('.horarioMartesCampo').val(GetSelectedTimeslots('PM'));
        $this.children('.horarioMiercolesCampo').val(GetSelectedTimeslots('PX'));
        $this.children('.horarioJuevesCampo').val(GetSelectedTimeslots('PJ'));
        $this.children('.horarioViernesCampo').val(GetSelectedTimeslots('PV'));
        $this.children('.horarioSabadoCampo').val(GetSelectedTimeslots('PS'));
        $this.children('.horarioDomingoCampo').val(GetSelectedTimeslots('PD'));        
    });
});

