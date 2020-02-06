import * as service from '../../shared/service/base';

export const buscarBancas = () => service.getRequest('/programa/examining-board');
export const buscarOrgaos = () => service.getRequest('/programa/agency');
export const buscarAssuntos = (idBanca, idOrgao) => service.getRequest(
  `programa/subject?examining_board_id=${idBanca}&agency_id=${idOrgao}`,
);
